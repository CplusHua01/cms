<?php
/**
 * Pager.class.php 数据分页类,使用BlueDB数据库对象$db
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
if(!defined('IN_OLDCMS')) die('Access Denied'); 

class Pager{
	public $href='',$sum=0,$pSum=0,$pNO=1,$data=array(),$pages=array(),$nav='';
	private $pRN=20,$pNavRN=5,$hrefC='&',$sql='',$countSql='';
	function __construct($countSql,$sql,$href='',$pRN=20,$pNavRN=5,$pNO=0){
		$pageNO=intval($pNO);
		$this->pNO=empty($pageNO) ? 1 : $pageNO;
		$this->pRN=intval($pRN);
		$this->pNavRN=empty($pNavRN) ? 5 : intval($pNavRN);
		$this->sql=$sql;
		$this->countSql=$countSql;
		$this->href=$href;
		$this->GetData();
		$this->GetNav();
	}
	/* data */
	private function GetData(){
		global $db;
		$this->sum=$db->FirstValue($this->countSql);
		$this->pSum=ceil($this->sum/$this->pRN);
		$this->data=$db->Dataset($this->sql.' LIMIT '.($this->pNO-1)*$this->pRN.','.$this->pRN);
	}
	/* page navigation */
	private function GetNav(){
		if(strrpos($this->href,'?')===false) $this->hrefC='?';
		//first
		if($this->pSum>1 && $this->pNO>1) $this->nav.='<li><a  class="icon" href="'.$this->href.$this->hrefC.'pNO=1" title="首页"><i class="icon-chevron-sign-left"></i></a></li>';
		//front
		if($this->pNO>1) $this->nav.='<li><a class="icon" href="'.$this->href.$this->hrefC.'pNO='.($this->pNO-1).'" title="上一页"><i class="icon-long-arrow-left"></i></a></li>';
		//num
		if($this->pSum<=$this->pNavRN){
			$this->PageNo(1,$this->pSum);
		}else{
			if($this->pNO<$this->pNavRN){
				$this->PageNo(1,$this->pNavRN);
			}elseif($this->pNO>=$this->pNavRN && $this->pNO<=$this->pSum-$this->pNavRN){
				$this->PageNo($this->pNO-$this->pNavRN+1,$this->pNO+$this->pNavRN-1);
			}elseif($this->pNO>$this->pSum-$this->pNavRN){
				$this->PageNo($this->pSum-$this->pNavRN,$this->pSum);
			}
		}
		//next
		if($this->pNO<$this->pSum) $this->nav.='<li><a class="icon" href="'.$this->href.$this->hrefC.'pNO='.($this->pNO+1).'" title="下一页"><i class="icon-long-arrow-right"></i></a></li>';
		//last
		if($this->pSum>1 && $this->pNO<$this->pSum) $this->nav.='<li><a class="icon" href="'.$this->href.$this->hrefC.'pNO='.($this->pSum).'" title="尾页"><i class="icon-chevron-sign-right"></i></a></li>';
	}
	private function PageNo($first,$last){
		for($i=$first;$i<=$last;$i++){
			$this->pages[]=$i;
			if($this->pNO==$i) $this->nav.='<li class="active disabled"><a>'.$i.'</a></li>';
			else $this->nav.='<li><a  class="active" href="'.$this->href.$this->hrefC.'pNO='.$i.'" title="第'.$i.'页">'.$i.'</a></li>';
		}
	}
	/* page nav arr */
	public static function GetPageNav($sum,$pNO=1,$hrefPrefix='',$pRN=20,$pNavRN=5){
		$pNO=$pNO<=0 ? 1 : $pNO;
		$pSum=ceil($sum/$pRN);
		$pages=array();
		if($pSum<=$pNavRN){
			for($i=1;$i<=$pSum;$i++){
				$pages[]=$i;
			}
		}else{
			if($pNO<$pNavRN){
				for($i=1;$i<=$pNavRN;$i++){
					$pages[]=$i;
				}
			}elseif($pNO>=$pNavRN && $pNO<=$pSum-$pNavRN){
				for($i=$pNO-$pNavRN+1;$i<=$pNO+$pNavRN-1;$i++){
					$pages[]=$i;
				}
			}elseif($pNO>$pSum-$pNavRN){
				for($i=$pSum-$pNavRN;$i<=$pSum;$i++){
					$pages[]=$i;
				}
			}
		}
		$page=array(
			'sum'=>$sum,
			'pNO'=>$pNO,
			'pSum'=>$pSum,
			'hrefPrefix'=>$hrefPrefix,
			'pages'=>$pages
		);
		return $page;
	}
}
?>
/**
 * Created by sky on 15/4/2.
 */
function cp() {
    clipboardData.setData('Text', document.getElementById("copy").innerText)
    alert('复制成功')
}
function copyurl(){
    var clipBoardContent=document.getElementById("copy").innerText;
    window.clipboardData.setData("Text",clipBoardContent);
    alert("复制成功!");
}
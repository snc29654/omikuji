$(function(){
    

    download_txt("test.txt", "12345");

    function download_txt(file_name, data) {

        const blob = new Blob([data], {type: 'text/plain'});
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        document.body.appendChild(a);
        a.download = file_name;
        a.href = url;
        a.click();
        a.remove();
        URL.revokeObjectURL(url);

    }
});
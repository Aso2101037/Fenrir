// a.js

function sendDataToPHP(dataFromJS) {
    // JavaScriptからPHPへデータを表示する
    var displayElementPHP = document.getElementById('php_data_display');
    displayElementPHP.innerHTML = "<p>" + dataFromJS + "</p>";
    console.log(dataFromJS); // コンソールに表示
}

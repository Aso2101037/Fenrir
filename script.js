// 現在地を取得する関数
function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
      alert("ご利用のブラウザはGeolocationに対応していません");
    }
  }
  
  // 位置情報を取得した際の処理
  function showPosition(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    
    const locationDiv = document.getElementById("location");
    locationDiv.innerHTML = `緯度: ${latitude} 経度: ${longitude}`;
  
    // 選択された半径の値を取得
    const radiusSelect = document.getElementById("radius");
    const selectedRadius = radiusSelect.value;
    
    // 取得した位置情報と半径を使って、APIを呼び出す処理を追加することができます
  }
  
  // 位置情報の取得に失敗した際の処理
  function showError(error) {
    switch(error.code) {
      case error.PERMISSION_DENIED:
        alert("位置情報の取得が許可されませんでした");
        break;
      case error.POSITION_UNAVAILABLE:
        alert("位置情報が利用できません");
        break;
      case error.TIMEOUT:
        alert("タイムアウトしました");
        break;
      case error.UNKNOWN_ERROR:
        alert("不明なエラーが発生しました");
        break;
    }
  }
  
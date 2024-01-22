function loadFarms() {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'ajaxapi_fav.php', true);

  xhr.onload = function() {
      if (this.status === 200) {
          const farms = JSON.parse(this.responseText)
      } else {
          console.error('Error fetching farms');
      }
  };
  
  xhr.onerror = function() {
      console.error('Request error...');
  };
  
  xhr.send();
}

function sendLikeToServer(farm_Id, userId) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'ajaxapi_fav.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
  xhr.onload = () => {
      if (this.status === 200) {
          console.log('Response from server:', this.responseText);
      } else {
          console.error('Error occurred while sending like');
      }
  };
  
  xhr.send('farm_Id=' + encodeURIComponent(farm_Id) + '&userId=' + encodeURIComponent(userId));
}

function addLikeToBackend(farmID, userId) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'ajaxapi_fav.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function() {
      if (this.status === 200) {
          console.log('Like added in backend:', this.responseText);
      } else {
          console.error('Error adding like');
      }
  };

  xhr.send(`farm_Id=${encodeURIComponent(farmID)}&userId=${encodeURIComponent(userId)}`);
}

function addToUserFavorites(farmID, userId) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'ajaxapi_fav.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function() {
      if (this.status === 200) {
          console.log('Added to favorites:', this.responseText);
      } else {
          console.error('Error adding to favorites');
      }
  };

  xhr.send(`farm_Id=${encodeURIComponent(farmID)}&userId=${encodeURIComponent(userId)}`);
}

function removeLikeFromBackend(farmID, userId) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'ajaxapi_fav.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function() {
      if (this.status === 200) {
          console.log('Like removed from backend:', this.responseText);
      } else {
          console.error('Error removing like');
      }
  };

  xhr.send(`farm_Id=${encodeURIComponent(farmID)}&userId=${encodeURIComponent(userId)}`);
}

function removeFromUserFavorites(farmID, userId) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'path/to/remove_from_favorites.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function() {
      if (this.status === 200) {
          console.log('Removed from favorites:', this.responseText);
      } else {
          console.error('Error removing from favorites');
      }
  };

  xhr.send(`farm_Id=${encodeURIComponent(farmID)}&userId=${encodeURIComponent(userId)}`);
}
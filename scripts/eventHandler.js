const handleLike = () => {
  document.addEventListener('DOMContentLoaded', function() {
      const likeSvg = document.querySelectorAll('.bi.bi-heart.farmlike');
      console.log(likeSvg);

      likeSvg.forEach((svg, index) => {
          svg.addEventListener('click', () => {
              const container = document.getElementById(`likeBtn${index}`);
              const state = container.getAttribute('data-state');
          
              if (state === 'not-liked') {
                  container.setAttribute('data-state', 'liked');
                  container.innerHTML = `
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                  </svg>
                  `;
                  // addLikeToBackend();    
                  // addToUserFavorites();  
              } else if (state === 'liked') {
                  container.setAttribute('data-state', 'not-liked');
                  container.innerHTML = `
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                      </svg>
                       `;
                      // removeLikeFromBackend();    
                      // removeFromUserFavorites(); 
                   } 
                  // else if (!user){
                  //     showSignUpPopup();
                  // }
              
          });
      });
      // document.body.addEventListener('click', function(e) {
      //     if (e.target.id.includes('likeBtn')) {
      //         const index = e.target.id.replace('likeBtn', '');
      //         const state = e.target.getAttribute('data-state');

      //         if (state === 'not-liked') {
      //             e.target.setAttribute('data-state', 'liked');
      //             e.target.innerHTML = `
      //             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
      //               <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
      //             </svg>
      //             `;
      //             // addLikeToBackend();    
      //             // addToUserFavorites();  
      //         } else if (state === 'liked') {
      //             e.target.setAttribute('data-state', 'not-liked');
      //             e.target.innerHTML = `
      //                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
      //                   <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
      //                 </svg>
      //             `;
      //             // removeLikeFromBackend();    
      //             // removeFromUserFavorites(); 
      //         } 
      //         // else if (!user){
      //         //     showSignUpPopup();
      //         // }


      //     }
      // });
  });
};

const handleSort = (items) => {
  const selectOption = document.getElementById('sortingOption');
  selectOption.addEventListener('change', () => {
      sortItems(selectOption.value, items);
  });
};

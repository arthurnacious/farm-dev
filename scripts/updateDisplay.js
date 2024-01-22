function updateDisplay(farms) {
  // Get the container element
  let displayContainer = document.getElementById('grids');
  displayContainer.innerHTML = '';

  farms.forEach((farm, index) => {
      let farmHTML = `
          <div class="pb-3 pt-3"> 
              <div class="border"> <a href="#" class="d-block"><img src="${farm.picture_url}" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                  <div class="pb-3 ps-4 pe-4 pt-4">
                      <div class="align-items-center d-flex justify-content-between">
                          <div class="pb-1 pt-1">
                              <a href="#" class="link-dark text-decoration-none"><h2 class="h5 mb-1">${farm.farm_name}</h2></a>
                              <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="me-1 location text-primary">
                                      <g>
                                          <path fill="none" d="M0 0h24v24H0z"/>
                                          <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                      </g>
                                  </svg>
                                  <span class="align-middle">${farm.district}</span>
                              </div>
                          </div>
                          <a class="ms-2 p-2 currentcolor" id="likeBtn${index}" data-state="not-liked" aria-label="add to favorite">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart farmlike" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                              </svg>
                          </a>
                      </div>
                      <hr/>
                      <div class="align-items-center d-flex justify-content-between">
                          <div class="pb-1 pt-1">
                              <span class="me-1 currentcolor">
                                  ${generateStarRating(farm.ratingsAverage)}
                              </span>
                              <span class="align-middle">${farm.ratingsNumber}</span>
                          </div>
                          <span class="fw-bold pb-1 pt-1">R${farm.price_level}</span>
                      </div>
                  </div>                                         
              </div>                                     
          </div>
      `;

      displayContainer.innerHTML += farmHTML;

      doc
  });
}
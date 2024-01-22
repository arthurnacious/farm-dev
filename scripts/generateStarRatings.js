function generateStarRating(ratingsAverage) {

  const filledStarSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em">
          <g>
              <path fill="none" d="M0 0h24v24H0z"/>
              <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
          </g>
      </svg>
  `;
  const emptyStarSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
      </svg>
  `;
  const halfStarSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em">
          <g>
              <path fill="none" d="M0 0h24v24H0z"/>
              <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
          </g>
      </svg>
  `;
  let ratingHTML = '';

  // Use a switch case to determine the star rating
  switch (Math.round(ratingsAverage * 2) / 2) {
    case 0.5:
      ratingHTML = halfStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG;
      break;
    case 1:
      ratingHTML = filledStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG;
      break;
    case 1.5:
      ratingHTML = filledStarSVG + halfStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG;
      break;
    case 2:
      ratingHTML = filledStarSVG + filledStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG;
      break;
    case 2.5:
      ratingHTML = filledStarSVG + filledStarSVG + halfStarSVG + emptyStarSVG + emptyStarSVG;
      break;
    case 3:
      ratingHTML = filledStarSVG + filledStarSVG + filledStarSVG + emptyStarSVG + emptyStarSVG;
      break;
    case 3.5:
      ratingHTML = filledStarSVG + filledStarSVG + filledStarSVG + halfStarSVG + emptyStarSVG;
      break;
    case 4:
      ratingHTML = filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + emptyStarSVG;
      break;
    case 4.5:
      ratingHTML =
        filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + halfStarSVG;
      break;
    case 5:
      ratingHTML =
        filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG;
      break;
    default:
      ratingHTML = emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG;
      break;
  }

  return ratingHTML;
}
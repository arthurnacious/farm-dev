function sortItems(option, farms) {
  console.log(option);
  switch (option) {
      case "Name":
          farms.sort((a, b) => a.farm_name.localeCompare(b.farm_name));
          break;
      case "Price: High to Low":
          farms.sort((a, b) => b.price_level - a.price_level);
          break;
      case "Price: Low to High":
          farms.sort((a, b) => a.price_level - b.price_level);
          break;
      case "Nearby":
          // farms.sort((a, b) => a.distance - b.distance);
          break;
      case "Random":
          farms.sort(() => Math.random() - 0.5);
          break;
      default:
          //no sorting
          break;
  }

  // console.log(farms);
  updateDisplay(farms);
}
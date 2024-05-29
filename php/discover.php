<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shorcut icon" type="image/x-icon" href="../icon/logo-black.png">
  <title>Saff and CO Perfume</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 40px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input, .form-group select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }
    .perfume-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 40px;
    }
    .perfume-item {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      width: 200px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .perfume-item h2 {
      font-size: 1.5em;
      margin-bottom: 10px;
    }
    .perfume-item ul {
      list-style-type: none;
      padding: 0;
    }
    .perfume-item ul li {
      background-color: #f0f0f0;
      margin: 5px 0;
      padding: 5px;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Discover Perfumes</h1>
    <div class="form-group">
      <label for="place">Favorite Place</label>
      <input type="text" id="place" placeholder="e.g., Beach, Mountain, City">
    </div>
    <div class="form-group">
      <label for="season">Preferred Season</label>
      <select id="season">
        <option value="">Select a season</option>
        <option value="Summer">Summer</option>
        <option value="Winter">Winter</option>
        <option value="Spring">Spring</option>
        <option value="Autumn">Autumn</option>
      </select>
    </div>
    <div class="form-group">
      <label for="drink">Favorite Drink</label>
      <input type="text" id="drink" placeholder="e.g., Coffee, Tea, Wine">
    </div>
    <button id="find-perfume">Find Perfume</button>

    <div id="perfume-list" class="perfume-list"></div>
  </div>

  <script>
    const perfumes = [
      { name: "CASCAVEL", characteristics: ["Wrm Spicy", "Aromatic", "Woody"], attributes: { place: "Beach", season: "Summer", drink: "Citrus Juice" } },
      { name: "CHNO", characteristics: ["Vanila", "Sweet", "Balsamic"], attributes: { place: "Mountain", season: "Winter", drink: "Hot Chocolate" } },
      { name: "COCO", characteristics: ["Citrus", "Woody", "Balsamic"], attributes: { place: "Garden", season: "Spring", drink: "Herbal Tea" } },
      { name: "ILIAD", characteristics: ["Fruity", "Floral", "Creamy"], attributes: { place: "Lake", season: "Summer", drink: "Mint Lemonade" } },
      { name: "LAS POZAZ", characteristics: ["Enigmatic", "Woody", "Warm Spicy"], attributes: { place: "City", season: "Autumn", drink: "Espresso" } },
      // Add more perfumes as needed
    ];

    document.getElementById('find-perfume').addEventListener('click', () => {
      const place = document.getElementById('place').value.toLowerCase();
      const season = document.getElementById('season').value.toLowerCase();
      const drink = document.getElementById('drink').value.toLowerCase();
      const perfumeList = document.getElementById('perfume-list');
      perfumeList.innerHTML = '';

      perfumes.forEach(perfume => {
        let matchCount = 0;

        if (perfume.attributes.place.toLowerCase().includes(place)) matchCount++;
        if (perfume.attributes.season.toLowerCase() === season) matchCount++;
        if (perfume.attributes.drink.toLowerCase().includes(drink)) matchCount++;

        const matchPercentage = (matchCount / 3) * 100;

        const perfumeItem = document.createElement('div');
        perfumeItem.classList.add('perfume-item');

        const perfumeName = document.createElement('h2');
        perfumeName.textContent = `${perfume.name} - ${matchPercentage.toFixed(0)}% Match`;
        perfumeItem.appendChild(perfumeName);

        const characteristicList = document.createElement('ul');
        perfume.characteristics.forEach(characteristic => {
          const listItem = document.createElement('li');
          listItem.textContent = characteristic;
          characteristicList.appendChild(listItem);
        });

        perfumeItem.appendChild(characteristicList);
        perfumeList.appendChild(perfumeItem);
      });
    });
  </script>
</body>
</html>

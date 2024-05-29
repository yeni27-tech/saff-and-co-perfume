<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shorcut icon" type="image/x-icon" href="../icon/logo-black.png">
  <title>Discover - SAFF & CO.</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap'); 

    body {
      font-family: Poppins;
      margin: 0;
      padding: 0;
      background: linear-gradient(90deg, #61a5a5 0%, #5E1675 100%);
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
      background: linear-gradient(50deg, #61a5a5 0%, #5E1675 100%);
      padding: 20px;
      border-radius: 10px;
      border: 2px solid black;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input, .form-group select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border-radius: 10px;
      background: #000;
      color: white;
      border: 1px solid white;
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
      border: 1px solid #fff;
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
      background-color: linear-gradient(136deg, hsl(275, 40%, 26%) 0%, hsl(192, 13%, 16%) 100%);
      margin: 5px 0;
      padding: 5px;
      border-radius: 4px;
    }

    button {
      background-color: black;
      color: white;
      padding: 10px;
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Discover Your Scent</h1>
    <div class="form-group">
      <label for="place">Fascinated Place</label>
      <input type="text" id="place" placeholder="Lake / Beach / Mountain / Garden / City">
    </div>
    <div class="form-group">
      <label for="season">Preferred Season</label>
      <select id="season">
        <option value="">Select a Season</option>
        <option value="Summer">Summer</option>
        <option value="Winter">Winter</option>
        <option value="Spring">Spring</option>
        <option value="Autumn">Autumn</option>
      </select>
    </div>
    <div class="form-group">
      <label for="drink">Preffered Drink</label>
      <input type="text" id="drink" placeholder="Hot Chocolate / Citrus Juice / Herbal Tea / Espresso / Mint Lemonade">
    </div>
    <button id="find-perfume">Find Your Perfume</button>

    <div id="perfume-list" class="perfume-list"></div>
  </div>

  <script>
    const perfumes = [
      { name: "CASCAVEL", characteristics: ["Warm Spicy", "Aromatic", "Woody"], attributes: { place: "Lake", season: "Autumn", drink: "Citrus Juice" } },
      { name: "CHNO", characteristics: ["Vanila", "Sweet", "Balsamic"], attributes: { place: "Garden", season: "Spring", drink: "Hot Chocolate" } },
      { name: "COCO", characteristics: ["Citrus", "Woody", "Balsamic"], attributes: { place: "Mountain", season: "Summer", drink: "Herbal Tea" } },
      { name: "ILIAD", characteristics: ["Fruity", "Floral", "Creamy"], attributes: { place: "Garden", season: "Summer", drink: "Mint Lemonade" } },
      { name: "LAS POZAS", characteristics: ["Enigmatic", "Woody", "Warm Spicy"], attributes: { place: "City", season: "Autumn", drink: "Espresso" } },
      { name: "LOUI", characteristics: ["Fresh", "Floral", "Tropical"], attributes: { place: "Mountain", season: "Autumn", drink: "Mint Lemonade" } },
      { name: "MALEALI", characteristics: ["Earthy", "Woody", "Musk"], attributes: { place: "Lake", season: "Summer", drink: "Herbal Tea" } },
      { name: "MINOUET", characteristics: ["Floral", "Ambery", "Gourmand"], attributes: { place: "Lake", season: "winter", drink: "Citrus juice" } },
      { name: "OMNIA", characteristics: ["Powdery", "Sweet", "Musk"], attributes: { place: "Garden", season: "winter", drink: "Espresso" } },
      { name: "OSTARA", characteristics: ["Sweet", "Fruity", "Earthy"], attributes: { place: "Beach", season: "spring", drink: "Hot chocolate" } },
      { name: "SAFF", characteristics: ["Leather", "Musk", "Smoky"], attributes: { place: "City", season: "spring", drink: "Mint Lemonade" } },
      { name: "SOLARIS", characteristics: ["Citrus", "Floral", "Woody", "Earthy"], attributes: { place: "City", season: "Autumn", drink: "Citrus Juice" } },
      { name: "S.O.T.B", characteristics: ["Citrus", "Floral", "Creamy"], attributes: { place: "Beach", season: "winter", drink: "Citrus Juice" } },
      { name: "TROPUE", characteristics: ["Sweet", "Rose", "Fruity"], attributes: { place: "Garden", season: "spring", drink: "Mint Lemonade" } },
      { name: "XOCOLATL", characteristics: ["Floral", "Woody", "Warm Spicy"], attributes: { place: "Lake", season: "Autumn", drink: "Herbal Tea" } },
    
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

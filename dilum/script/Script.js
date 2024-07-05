function loadData(data){
    if(data == 'A')
    {
        document.getElementById("header1").innerHTML = "";
        document.getElementById("des1").innerHTML = "";
        document.getElementById("header2").innerHTML = "";
        document.getElementById("des2").innerHTML = "";
        document.getElementById("header1").innerHTML = "<hr style='border: 1px solid black'>"+"<br>"+"<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #d1a969;'>"+"Balanced Bliss Diet"+"</fieldset>";
        document.getElementById("des1").innerHTML = "<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #fffef2;'>"+"<br>"+"<ul>"+"<li>"+"<b>"+"Description:"+"</b>"+" A well-rounded diet focusing on balanced macronutrient intake for overall health and energy."+"</li>"+"<br>"+"<li>"+"<b>"+"Ingredients:"+"</b>"+" Lean proteins (chicken breast, fish, tofu), whole grains (brown rice, quinoa), fruits and vegetables (spinach, broccoli, berries), healthy fats (avocado, nuts)."+"</li>"+"<br>"+
        "<li>"+"<b>"+"Sample Day"+"</b>"+"<li>"+"Breakfast: Scrambled eggs with spinach and whole grain toast."+"</li>"+
        "<li>"+"Lunch: Grilled chicken salad with mixed greens, tomatoes, and olive oil dressing."+"</li>"+
        "<li>"+"Dinner: Baked salmon with quinoa and steamed broccoli."+"</li>"+"</li>"+"<br>"+
        "<li>"+"<b>"+"Micro Nutrition:"+"</b>"+"<li>"+"Protein: 90g"+"</li>"+"<li>"+"Carbohydrates: 200g"+"</li>"+"<li>"+"Fat: 60g"+"</li>"+"<li>"+"Fiber: 30g"+"</li>"+"<li>"+"Vitamins and minerals: Varied, meeting daily requirements."+"</li>"+"</li>"+"</ul>"+"<br>"+"</fieldset>"+"<br>"+"<hr style='border: 1px solid black'>";
    }
    else if(data == 'B')
    {
        document.getElementById("header1").innerHTML = "";
        document.getElementById("des1").innerHTML = "";
        document.getElementById("header2").innerHTML = "";
        document.getElementById("des2").innerHTML = "";
        document.getElementById("header1").innerHTML = "<hr style='border: 1px solid black'>"+"<br>"+"<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #d1a969;'>"+"Keto Fuel Plan"+"</fieldset>";
        document.getElementById("des1").innerHTML = "<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #fffef2;'>"+"<br>"+"<ul>"+"<li>"+"<b>"+"Description:"+"</b>"+" A high-fat, low-carb diet aimed at inducing ketosis for fat burning and weight loss."+"</li>"+"<br>"+"<li>"+"<b>"+"Ingredients:"+"</b>"+" Fatty meats (bacon, steak), non-starchy vegetables (leafy greens, cauliflower), healthy oils (coconut oil, olive oil), nuts and seeds (almonds, chia seeds)."+"</li>"+"<br>"+
        "<li>"+"<b>"+"Sample Day"+"</b>"+"<li>"+"Breakfast: Scrambled eggs cooked in coconut oil with avocado slices."+"</li>"+
        "<li>"+"Lunch: Grilled salmon with a side of sautéed spinach in olive oil."+"</li>"+
        "<li>"+"Dinner: Bunless burger topped with cheese, served with a side of roasted Brussels sprouts."+"</li>"+"</li>"+"<br>"+
        "<li>"+"<b>"+"Micro Nutrition:"+"</b>"+"<li>"+"Protein: 100g"+"</li>"+"<li>"+"Carbohydrates: 30g"+"</li>"+"<li>"+"Fat: 150g"+"</li>"+"<li>"+"Fiber: 20g"+"</li>"+"<li>"+"Vitamins and minerals: Supplemented as needed."+"</li>"+"</li>"+"</ul>"+"<br>"+"</fieldset>"+"<br>"+"<hr style='border: 1px solid black'>";
    }
    else if(data == 'C')
    {
        document.getElementById("header1").innerHTML = "";
        document.getElementById("des1").innerHTML = "";
        document.getElementById("header2").innerHTML = "";
        document.getElementById("des2").innerHTML = "";
        document.getElementById("header1").innerHTML = "<hr style='border: 1px solid black'>"+"<br>"+"<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #d1a969;'>"+"Plant-Powered Plan"+"</fieldset>";
        document.getElementById("des1").innerHTML = "<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #fffef2;'>"+"<br>"+"<ul>"+"<li>"+"<b>"+"Description:"+"</b>"+" A vegan diet rich in plant-based proteins, fiber, and antioxidants for overall health and vitality."+"</li>"+"<br>"+"<li>"+"<b>"+"Ingredients:"+"</b>"+" Legumes (lentils, chickpeas), grains (quinoa, oats), fruits and vegetables (kale, sweet potatoes, berries), plant-based protein sources (tofu, tempeh)."+"</li>"+"<br>"+
        "<li>"+"<b>"+"Sample Day"+"</b>"+"<li>"+"Breakfast: Overnight oats with almond milk, chia seeds, and mixed berries."+"</li>"+
        "<li>"+"Lunch: Quinoa salad with mixed vegetables and a lemon-tahini dressing."+"</li>"+
        "<li>"+"Dinner: Stir-fried tofu with broccoli, bell peppers, and brown rice."+"</li>"+"</li>"+"<br>"+
        "<li>"+"<b>"+"Micro Nutrition:"+"</b>"+"<li>"+"Protein: 80g"+"</li>"+"<li>"+"Carbohydrates: 180g"+"</li>"+"<li>"+"Fat: 50g"+"</li>"+"<li>"+"Fiber: 40g"+"</li>"+"<li>"+"Vitamins and minerals: High in vitamins A, C, K, folate, and iron."+"</li>"+"</li>"+"</ul>"+"<br>"+"</fieldset>"+"<br>"+"<hr style='border: 1px solid black'>";
    }
    else if(data == 'D')
    {
        document.getElementById("header1").innerHTML = "";
        document.getElementById("des1").innerHTML = "";
        document.getElementById("header2").innerHTML = "";
        document.getElementById("des2").innerHTML = "";
        document.getElementById("header2").innerHTML = "<hr style='border: 1px solid black'>"+"<br>"+"<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #d1a969;'>"+"Gluten-Free Cleanse Plan"+"</fieldset>";
        document.getElementById("des2").innerHTML = "<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #fffef2;'>"+"<br>"+"<ul>"+"<li>"+"<b>"+"Description:"+"</b>"+" Eliminates gluten-containing grains to support individuals with gluten sensitivities or celiac disease."+"</li>"+"<br>"+"<li>"+"<b>"+"Ingredients:"+"</b>"+" Gluten-free grains (quinoa, rice), lean proteins, fruits and vegetables, nuts and seeds, gluten-free substitutes (almond flour, coconut flour)."+"</li>"+"<br>"+
        "<li>"+"<b>"+"Sample Day"+"</b>"+"<li>"+"Breakfast: Quinoa porridge with almond milk and berries."+"</li>"+
        "<li>"+"Lunch: Grilled shrimp salad with mixed greens and avocado."+"</li>"+
        "<li>"+"Dinner: Baked chicken with roasted vegetables and quinoa."+"</li>"+"</li>"+"<br>"+
        "<li>"+"<b>"+"Micro Nutrition:"+"</b>"+"<li>"+"Protein: 100g"+"</li>"+"<li>"+"Carbohydrates: 150g"+"</li>"+"<li>"+"Fat: 60g"+"</li>"+"<li>"+"Fiber: 30g"+"</li>"+"<li>"+"Vitamins and minerals: Focus on vitamin D, calcium, and iron sources."+"</li>"+"</li>"+"</ul>"+"<br>"+"</fieldset>"+"<br>"+"<hr style='border: 1px solid black'>"+"<br>";
    }
    else if(data == 'E')
    {
        document.getElementById("header1").innerHTML = "";
        document.getElementById("des1").innerHTML = "";
        document.getElementById("header2").innerHTML = "";
        document.getElementById("des2").innerHTML = "";
        document.getElementById("header2").innerHTML = "<hr style='border: 1px solid black'>"+"<br>"+"<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #d1a969;'>"+"Paleo Power Plan"+"</fieldset>";
        document.getElementById("des2").innerHTML = "<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #fffef2;'>"+"<br>"+"<ul>"+"<li>"+"<b>"+"Description:"+"</b>"+" Emulates the diet of ancient humans, focusing on whole foods and avoiding processed items."+"</li>"+"<br>"+"<li>"+"<b>"+"Ingredients:"+"</b>"+" Lean meats (grass-fed beef, turkey), seafood (salmon, shrimp), fruits and vegetables (berries, leafy greens), nuts and seeds (walnuts, flaxseeds)."+"</li>"+"<br>"+
        "<li>"+"<b>"+"Sample Day"+"</b>"+"<li>"+"Breakfast: Omelette with vegetables and a side of mixed berries."+"</li>"+
        "<li>"+"Lunch: Grilled shrimp salad with mixed greens and avocado."+"</li>"+
        "<li>"+"Dinner: Baked salmon with roasted sweet potatoes and steamed asparagus."+"</li>"+"</li>"+"<br>"+
        "<li>"+"<b>"+"Micro Nutrition:"+"</b>"+"<li>"+"Protein: 100g"+"</li>"+"<li>"+"Carbohydrates: 100g"+"</li>"+"<li>"+"Fat: 80g"+"</li>"+"<li>"+"Fiber: 25g"+"</li>"+"<li>"+"Vitamins and minerals: Rich in potassium, magnesium, and vitamins B and E."+"</li>"+"</li>"+"</ul>"+"<br>"+"</fieldset>"+"<br>"+"<hr style='border: 1px solid black'>"+"<br>";
    }
    else if(data == 'F')
    {
        document.getElementById("header1").innerHTML = "";
        document.getElementById("des1").innerHTML = "";
        document.getElementById("header2").innerHTML = "";
        document.getElementById("des2").innerHTML = "";
        document.getElementById("header2").innerHTML = "<hr style='border: 1px solid black'>"+"<br>"+"<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #d1a969;'>"+"Low-Carb High-Protein Plan"+"</fieldset>";
        document.getElementById("des2").innerHTML = "<fieldset style='margin-left: 20px; margin-right: 20px; background-color: #fffef2;'>"+"<br>"+"<ul>"+"<li>"+"<b>"+"Description:"+"</b>"+" Focuses on minimizing carbohydrate intake while prioritizing protein for muscle growth and satiety."+"</li>"+"<br>"+"<li>"+"<b>"+"Ingredients:"+"</b>"+" Lean meats (chicken breast, turkey), eggs, low-carb vegetables (broccoli, spinach), cheese, nuts and seeds (pecans, sunflower seeds)."+"</li>"+"<br>"+
        "<li>"+"<b>"+"Sample Day"+"</b>"+"<li>"+"Breakfast: Scrambled eggs with spinach and cheese."+"</li>"+
        "<li>"+"Lunch: Grilled chicken breast with a side of mixed greens."+"</li>"+
        "<li>"+"Dinner: Turkey chili with beans and diced vegetables."+"</li>"+"</li>"+"<br>"+
        "<li>"+"<b>"+"Micro Nutrition:"+"</b>"+"<li>"+"Protein: 120g"+"</li>"+"<li>"+"Carbohydrates: 80g"+"</li>"+"<li>"+"Fat: 60g"+"</li>"+"<li>"+"Fiber: 25g"+"</li>"+"<li>"+"Vitamins and minerals: Emphasis on B vitamins, zinc, and iron."+"</li>"+"</li>"+"</ul>"+"<br>"+"</fieldset>"+"<br>"+"<hr style='border: 1px solid black'>"+"<br>";
    }
}

function enableButton(){
    var checkbox = document.getElementById("checkBox");
    var submitButton = document.getElementById("submitBtn");
    var updateButton = document.getElementById("updbtn");
    
   submitButton.disabled = !checkbox.checked;
   updateButton.disables = !checkbox.checked;
}



<?php
//include all the libraries
  include('../Model/Config.php');
 include('./session.php');
   $income ;
   $cost;
   $m;
   $p;
   $tv;
   $i;
   $me;
   $dif;
//declare all the variables in order to make them globals

function verify($S_id,$u_id) {

 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'Das_Project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 $ses_sql=mysqli_query($db,"select * from Report where id_user = '$u_id' and id='$S_id' ");
 //this checks that the persons created that report
 
 $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 $count = mysqli_num_rows($ses_sql);
      // If result matched $myusername and $mypassword, table row must be 1 row
		

      if($count == 1) {
     $GLOBALS['income'] =(int) $row['income'];
    $GLOBALS['cost'] =(int)$row['costs'];
    $GLOBALS['m']=(int)$row['mortage'];
    $GLOBALS['p']=(int)$row['private'];
    $GLOBALS['tv']=(int)$row['tv'];
    $GLOBALS['i']=(int)$row['internet'];
    $GLOBALS['me']=(int)$row['membership'];
    $GLOBALS['dif']=$GLOBALS['income']-$GLOBALS['cost'];
    $GLOBALS['test1']=(boolean)test();   
    }
    else{
  header("Location: ../Views/welcome.php");
    
    } 
    

}

function service(){
	//this prints all the recommendation for the services depending of the income 
	if(!$GLOBALS['test1']){

		echo "<p>You are having an <em>excesive lack of money </em>.  There are two main reasons people have this problem. <br>
		1.- A low income: Start searching for another job to increase it. <br>
 	    2.- Reduce your life cost, maybe you can start not using the microwave, buy in local food markets";

 	    if($GLOBALS['tv']==1){
 	    	echo ", stop paying for premium services like Netflix or Tv";	
 	    }
 	     if($GLOBALS['me']==1){
 	    	echo ", stop paying your membership";	
 	    }
 	    echo ".</p>";
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p>So your having a low income so you have to be careful with  your finance.<br>";

          echo "I recommend you to spend from $500 to $650, in your services.<br> If you are asking which one are your services: <br>  1. Water service <br>
          	  2. Gas service <br> 
          	  3. Lighting. </p> ";
	}
	elseif ($GLOBALS['income']<15000 ) {
          echo "<p>So your receaving a reasonable income take care of your finance.<br>";
          echo "I recommend you to spend from $800 to $1200, in your services.<br> If you are asking which one are your services: <br>  1. Water service <br>
          	  2. Gas service <br> 
          	  3. Lighting.</p> ";
	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p>So your having a earning good money, here is your plan I have decided for you.<br>";

          echo "I recommend you to spend from $850 to $1250, in your services.<br> If you are asking which one are your services: <br>  1. Water service <br>
          	  2. Gas service <br> 
          	  3. Lighting. </p>";
	}

	elseif ($GLOBALS['income']<65000 ) {
          echo "<p>You are earning good money, here is your plan I have decided for you.<br>";

          echo "I recommend you to spend from $900 to $1300, in your services.<br> If you are asking which one are your services: <br>  1. Water service <br>
          	  2. Gas service <br> 
          	  3. Lighting.</p> ";
	}
	elseif ($GLOBALS['income']>65000 ) {
          echo "<p>You are earning a lot of money, I will give you some tricks for having a good finance and help you to increice your wealth.<br>";

          echo "I recommend you to spend from $1200 to $1550, in your services.<br> If you are asking which one are your services: <br>  1. Water service <br>
          	  2. Gas service <br> 
          	  3. Lighting.</p> ";
	}

 }
   
 function transport(){
//this prints all the recommendation for the transport depending of the income  and the difference between the income and the expenses. This print a special format. 

 	if(!$GLOBALS['test1']){

		echo "<p style='text-align: center;color: #fff;' >Sorry I can't help you with your finance. <br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p style='text-align: center;color: #fff;' >If you are using the public transport you are doing fine.   <br>";

          echo "If you are using a car, careful sometimes old cars waste a lot of money trying to get reparaid. Also the gas is more expensive nowadays.  <br>
          	  The amount of money I reccomend you to spend in transportation is from : $400 to $650.  
          	   </p> ";
	}
	elseif ($GLOBALS['income']<15000 ) {
		 if($GLOBALS['dif']< 6000){
          echo "<p style='text-align: center;color: #fff;' I recommend you to use the public transport, when time is not a problem .<br> 
          Don't abuse from APP like uber or Cabify. Try to have a cheap car that doesn't have a lot of problems like a golf, or a chevy.  <br>
          	  The amount of money I reccomend you to spend in transportation is from $650 to $800 : .  
          </p> ";
      }else{
      	 echo "<p style='text-align: center;color: #fff;' > I reccommend you to buy a small car that doesn't use a lot of gas and cars that can be fixed easily. <br> You can organize a car pooling with the people you are working with. <br> Remember that Uber has Dinamyc Far, take care. 
 			The amount of money I reccomend you to spend in transportation is from $1000 to $1200 :
          </p> ";
      }
	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p style='text-align: center;color: #fff;' > I reccommend you have a car that has less than 5 years. Then change to a new car, so if the car need to be fixed the car agency will do it for free the first 2 to 5 years. <br> Remember that Uber has Dinamyc Far, take care of it use it only when is needed. <br>
 			The amount of money I reccomend you to spend in transportation is from".number_format(($GLOBALS['dif']/10))." to".number_format(($GLOBALS['dif']/6)).".
          </p> ";
	}

	elseif ($GLOBALS['income']<65000 ) {
         echo "<p style='text-align: center;color: #fff;' > I reccommend you have a secure car that has less than 4 years or 100,00 Km . Then change to a new car, so if the car need to be fixed the car agency will do it for free the first 2 to 5 years. <br> Remember to buy a car with brakes abs, with at leat 6 airbags.  <br>
 			The amount of money I reccomend you to spend in transportation is from".number_format(($GLOBALS['dif']/10))." to".number_format(($GLOBALS['dif']/7)).".
          </p> ";
	}
	elseif ($GLOBALS['income']>65000 ) {
          echo "<p style='text-align: center;color: #fff;' > My only reccomendation is that don't change your car every year. Wait at least 4 years or 100,000 km. this is the best time to change your car, so you don't waste a lot of money due to cars are devaluated each year. <br>";

          echo " My recommendation in  monney for you is spend at most 10% of your difference between income and cost=".number_format(($GLOBALS['dif']/10)).".</p> ";
	}
 }

 function supplies (){
//this prints all the recommendation for the supplies depending of the income  and the difference between the income and the expenses.
if(!$GLOBALS['test1']){

		echo "<p>Buy in the cheapest market you found and tried to cook your own food.<br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p>Supplies is one of the most important one, how much you spend on food is critically. <br>";
          echo "Try to buy in the local food markets, take advantage on the special days of discounts that supermarkets offers. Try to cook your food daily and twice a month eat on a cheap restaurant, or that has promotion that day or use a coupon . <br> The money you are supposed to expend is from $1900 to $2300. That means that is around $430 to $600 per week. 
				</p>
          <h5 style='text-align: center;'>Tip:The best day to shop groceries is Wednesday and Tuesday. There is less people and supermarkets have one day offer. <br>  
          Tip: The best day to eat in a restaurant are Tuesday, most of them have discounts. </h5><br>
          	   ";
	}
	elseif ($GLOBALS['income']<15000 ) {
		 if($GLOBALS['dif']< 6000){

         echo "<p>Supplies is one of the most important one, how much you spend on food is critically. <br>";
          echo "Try to go to the supermarkets on Tuesday or Wednesday that is cheapear than other days.  Try to cook your food daily and  take it to your work  be a good 'Godinez'. If you are going to eat in a restaurant please take check if they have promotion. <br> The money you are supposed to expend is from $2300 to $2600 . That means that is around $580 to $650 per week. 
				</p>   	 ";
      }else 

      {
      	  echo "<p>Supplies is one of the most important one, how much you spend on food is critically. <br>";
          echo "Try to go to the big supermarkets so you can save money just like 'City Club', ' Sam's ', 'Costco'.  Try to cook your food daily and  take it to your work  be a good 'Godinez'.<br> You can start to eat healthier. Try to eat a lot of green vegetables, and your protein portion . Please try to go to restaurant 3 times per month, instead of that try to cook your own food. <br> <br> The money you are supposed to expend is from $2500 to $2700 . That means that is around $625 to $850 per week. 
				</p>   	 ";

      }
	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p>Supplies is one of the most important one, how much you spend on food is critically. <br>";
          echo "Try to go to the big supermarkets so you can save money just like 'City Club', ' Sam's ', 'Costco'. 
          Try to eat well, have a balance diet. If you can't do it by your self try it with a friend. You can pay for service to cook your food daily.<br> Try to eat a lot of green vegetables, and your protein portion . <br>You can go with your family to a restaurant once per week. <br> <br> The money you are supposed to expend is from $3800 to $6200 . That means that is around $1200 to $1800 per week. </p>	 ";

	}

	elseif ($GLOBALS['income']<65000 ) {
           echo "<p>Supplies is one of the most important one, how much you spend on food is critically <br>";

          echo "Try eating healthier, avoid fried food. You have a lot of variety in the supermarkets, like organic food .<br>Remember to eat your protein, your carbohydrates,fats in a balance way. You can try going to different types of restaurants. <br>There are a lot of products that would help you if you don't have to time to eat, like Usana or herbalife.<br>The money I recommend you to spend is ".number_format((($GLOBALS['dif']*.10))+1000)." </p> ";
	}
	elseif ($GLOBALS['income']>65000 ) {
          echo "<p>Supplies is one of the most important one, how much you spend on food is critically <br>";

          echo "Try eating healthier, avoid fried food. You have a lot of variety in the supermarkets, like organic food .<br>Remember to eat your protein, your carbohydrates,fats in a balance way. You can try going to different types of restaurants. <br>There are a lot of products that would help you if you don't have to time to eat, like Usana or herbalife.<br> You can pay for service to cook your food daily. <br>The money I recommend you to spend is ".number_format((($GLOBALS['dif']*.12))+1000)." </p> ";
	}
	
 }


 function entertainment(){
//this prints all the recommendation for the entretainment depending of the income  and the difference between the income and the expenses. This print a special format. 
 	if(!$GLOBALS['test1']){

		echo "<p style='text-align: center;color: #fff;' >My only reccomendation for you is: Please don't get drunk and try not to buy alcohol. <br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p style='text-align: center;color: #fff;'>Everyone has to have fun, Right? Everything in Moderation<br>";

          echo "My recommendation for you is to:</p><br>
          <p style='color: #f5f5f5; text-align: center;'> 1.- Go to free places. You can go to a park, or to a free museum, or to downtown. <br>More information in your local newspaper.You can see the next theatre star for free, before she/he becomes famous. <br><br>
          	2.- If you want to go to the cinema, Wednesday is your favorite day or get a 2x1 coupon or a special price coupon. Some products take you for free to the cinema like chips, cookies or popcorns. <br><br>
          	3.- If you want to drink until you pass out... don't do it. Instead call some friend and share a bottle of   wine , vodka, tequila or any drink you want in a personal house. You would get sorprise how much you save. 
          	</p><br>
          	<p style='text-align: center;color: #fff;' >The money you are supposed to expend is between $150 and $400.</p>
          <p style='text-align: center;color: #fff;' >You receive extra money on December the famous 'aguinaldo' so you save the money in order to go on vacations with your family. Also remember that you can receive an extra money on June or July you can save it for incidential or also for a  back to school if you have kids. </p>
            ";


	}
	elseif ($GLOBALS['income']<15000 ) {

		 echo "<p style='text-align: center;color: #fff;'>Have fun, Remember: Everything in Moderation<br>";
           echo "My recommendation for you is to:</p><br>
          <p style='color: #f5f5f5; text-align: center;'> 1.- Try to go to free places. You can go jogging in a public park, maybe a walk on downtown. <br><br>
          	2.- If you want to go to the cinema, try to buy the special card that allow you to buy cheap tickets. Avoid the things that the cinema sells you, they are pretty expensive. Some products take you for free to the cinema like chips, cookies or popcorns. <br><br>
          	3.- If you want to drink until you pass out... don't do it. Instead call some friend and share a bottle of   wine , vodka, tequila or any drink you want in a personal house. You would get sorprise how much you save. 
          	<p style='text-align: center;color: #fff;' >What abou vacations? You receive extra income  on December the famous 'aguinaldo' so you save the money in order to go on vacations with your family. Also remember that you can receive an extra money on June or July you can save it for incidential or also for a  back to school if you have kids. </p>
          	</p><br>";
			if($GLOBALS['dif']< 6000){
         
          	echo "<p style='text-align: center;color: #fff;' >The money you are supposed to expend is between $550 and $700.</p> ";

		     	}
		    else{
		    	echo "<p style='text-align: center;color: #fff;' >The money you are supposed to expend is between $750 and $1000.</p>";
				}
			if($GLOBALS['tv']==0){
				echo "<p style='text-align: center;color: #fff;' >You can try web applications such as Netflix.</p>";
			}

	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p style='text-align: center;color: #fff;'>Everything in Moderation<br>";
           echo "My recommendation for you is to:</p><br>
          <p style='color: #f5f5f5; text-align: center;'> 1.- Try to spend time with your family. Maybe an ice-cream at your the park. Maybe a walk on downtown and finishing with a special dinner with your love ones. <br><br>
          	2.- You can go to the cinema with them. Try to ask them which movie they would like to watch. <br>
          	3.- If you want to drink until you pass out... don't do it. Instead call some friend and share a bottle of   wine , vodka, tequila or any drink you want in a personal house or at a bar. Remember if you drink don't drive.
          	</p>
          	<p style='text-align: center;color: #fff;' >Vacations everybody needs them. On December the famous 'aguinaldo' you can use it to go on vacations. Also remember that you can receive an extra money on June or July you can save it for incidential or also for a  back to school if you have kids. </p>";

          	echo "<p style='text-align: center;color: #fff;' >The money you are supposed to expend is between $1250 and $2000.</p> ";

	}

	elseif ($GLOBALS['income']<65000 ) {
           echo "<p style='text-align: center;color: #fff;'>EAhh Eahh Party Party !!! Everything in Moderation<br>";
           echo "My recommendation for you is to:</p><br>
          <p style='color: #f5f5f5; text-align: center;'> 1.- Try to spend time with your family. Maybe an ice-cream at your the park. Maybe a walk on downtown and finishing with a special dinner with your them <br><br>
          	2.- You can go to the cinema with them. Try to ask them which movie they would like to watch. <br>
          	3.- If you want to drink until you pass out... don't do it. Instead call some friend and share a bottle of   wine , vodka, tequila or any drink you want in a personal house or at a bar. Remember if you drink don't drive.
          	</p><br>";

          	 if($GLOBALS['me']==0){
				echo "<p style='text-align: center;color: #fff;' >You can try a membership</p> ";
          	 }
          	 else{
          	 	echo "<p style='text-align: center;color: #fff;' >Go to the club with your friend and family and have a good time.</p> ";
          	 }
  echo "<p style='text-align: center;color: #fff;'>The money you are supposed to expend is between". number_format($GLOBALS['dif']/13)." and ".number_format($GLOBALS['dif']/10)."</p> ";
     }
	
	elseif ($GLOBALS['income']>65000 ) {
		          echo "<p style='text-align: center;color: #fff;'>EAhh Eahh Party Party !!! Everything in Moderation<br>";
		           echo "My recommendation for you is to:</p><br>
		          <p style='color: #f5f5f5; text-align: center;'> 1.- Try to spend time with your family. Maybe an ice-cream at your the park. Maybe a walk on downtown and finishing with a special dinner with your them <br><br>
		          	2.- You can go to the cinema with them. Try to ask them which movie they would like to watch. <br>
		          	3.- If you want to drink until you pass out... don't do it. Instead call some friend and share a bottle of   wine , vodka, tequila or any drink you want at a bar. Remember if you drink don't drive.
		          	</p><br>";

		          	 if($GLOBALS['me']==0){
						echo "<p style='text-align: center;color: #fff;' >You can try a membership</p> ";

		          	 }
		          	 else{
		          	 	echo "<p style='text-align: center;color: #fff;' >Go to the club with your friend and family and have a good time.</p> ";
		          	 }
		          	echo "<p style='text-align: center;color: #fff;' >The money you are supposed to expend is between ".number_format((($GLOBALS['dif']*.05)))." and ".number_format((($GLOBALS['dif']*.10))).".</p> ";
	
	}

 }

function tax(){
	//this prints all the recommendation for the tax depending of the income
	if(!$GLOBALS['test1']){

		echo "<p>Sorry I don't have information for you.<br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p> Everybody has to pay taxes, despite they don't like them. Remember you put your income after taxes. This taxes below aren't from your salary. <br> ";
          echo " If you have a car you have to pay two things 'engomado' and  'verificacion' (twice per year) and in some states you have to pay 'tenencia'. <br>
          	Also you have to pay 'predial' for the house you are living. <br>
          	The money I expected that you are going to expend is around $800 and $1500 per year. So if you save from $70 to $150 per month you can pay your taxes whenever you need them.    
          	</p> ";
	}
	elseif ($GLOBALS['income']<15000 ) {
          echo "<p> Everybody has to pay taxes, despite they don't like them. Remember you put your income after taxes. This taxes below aren't from your salary. <br> ";
          echo " If you have a car you have to pay two things 'engomado' and  'verificacion' (twice per year) and in some states you have to pay 'tenencia'. <br>
          	Also you have to pay 'predial' for the house you are living. <br>
          	The money I expected that you are going to expend is around $1500 and $3000 per year. So if you save from $120 to $250 per month you can pay your taxes whenever you need them.    
          	</p> ";
	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p> Everybody has to pay taxes, despite they don't like them. Remember you put your income after taxes. This taxes below aren't from your salary. <br> ";
          echo " If you have a car you have to pay two things 'engomado' and  'verificacion' (twice per year) and in some states you have to pay 'tenencia'. <br>
          	Also you have to pay 'predial' for the house you are living. <br>
          	The money I expected that you are going to expend is around $2400 and $4200 per year. So if you save  from $200  to $350 per month you can pay your taxes whenever you need them.    
          	</p> ";
	}

	elseif ($GLOBALS['income']<65000 ) {
          echo "<p> Everybody has to pay taxes, despite they don't like them. Remember you put your income after taxes. This taxes below aren't from your salary. <br> ";
          echo " If you have a car you have to pay two things 'engomado' and  'verificacion' (twice per year) and in some states you have to pay 'tenencia'. Also if you have a car that cost more than $300,000  you have an special task. <br>
          	Also you have to pay 'predial' for the house you are living. <br>
          	The money I expected that you are going to expend is around $3600 and $7200 per year. So if you save  from $300 to $600 per month you can pay your taxes whenever you need them.    
          	</p> ";
	}
	elseif ($GLOBALS['income']>65000 ) {
         echo "<p> Everybody has to pay taxes, despite they don't like them. Remember you put your income after taxes. This taxes below aren't from your salary. <br> ";
          echo " If you have a car you have to pay two things 'engomado' and  'verificacion' (twice per year) and in some states you have to pay 'tenencia'. Also if you have a car that cost more than $300,000  you have an special task. <br>
          	Also you have to pay 'predial' for the house you are living. <br>
          	The money I expected that you are going to expend is around $4800 and $10,200 per year. So if you save  from $400 to $850 per month you can pay your taxes whenever you need them.    
          	</p> ";
	}
	
}


function  clothing(){
//this prints all the recommendation for the clothing depending of the income  and the difference between the income and the expenses. This print a special format. 
	if(!$GLOBALS['test1']){

		echo "<p style='text-align: center;color: #fff;'>Sorry I don't have information for you.<br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p style='text-align: center;color: #fff;'> Everybody need to be dressed, but fashion is optional. <br> <br> ";
          echo " My recommendation for you is to become the best friend of clearance cheap clothing stores <br>
          	In México the sales start on July almost the second week, and on February the first week.  <br>
          	 You are not going to buy cloths every month so you can save the money until you found a cloth you like that you can afford.   </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $180 and $300 per month.    
          	</p> ";
	}
	elseif ($GLOBALS['income']<15000 ) {
          
		if($GLOBALS['dif']< 6000){
         echo "<p style='text-align: center;color: #fff;'> Everybody need to be dressed, but fashion is optional. <br> <br> ";
          echo " My recommendation for you is to become aware of clearance. <br>
            In México the sales start on July almost the second week, and on February the first week.  <br>
          	 You are not going to buy cloths every month so you can save the money until you found a cloth you like that you can afford.  Outlet is also a great place to go.  </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $380 and $600 per month.    
          	</p> ";
      }
      else{
     echo "<p style='text-align: center;color: #fff;'> Fashion is cool but is pretty expensive, right?  <br> <br> ";
          echo " My recommendation for you is to become aware of sales. <br>
            In México after Janaury 6th the sales start and before the back to school (June almost the last week).  <br>
          	 I recommend you... don't buy anything every month. Save your money for this dates and then when the sales start, you like the product and is affordable. Buy it !    </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $580 and $800 per month.    
          	</p> ";
      }

	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p style='text-align: center;color: #fff;'> Fashion is cool but in some times pretty expensive, right?  <br> <br> ";
          echo " My recommendation for you is to buy only what you need. <br>
            If you don't need it don't buy it. Your desires are unlimited you will never be satisfied. Remember only to buy the things you need.  <br>
          	 I recommend you... don't buy anything every month. Save your money when you like the product and is affordable. Buy it! </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $1000 and $2800 per month.    
          	</p> ";
	}

	elseif ($GLOBALS['income']<65000 ) {
          echo "<p style='text-align: center;color: #fff;'> Fashion is cool, but do you need it? <br> <br> ";
          echo " My recommendation for you is to buy only what you need. <br>
            If you don't need it don't buy it. Your desires are unlimited you will never be satisfied. Remember only to buy the things you need.  <br>
          	  Save your money for when you like the product you need it. Buy it! </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $2500 and $5800 per month.    
          	</p> ";
	}
	elseif ($GLOBALS['income']>65000 ) {
          echo "<p style='text-align: center;color: #fff;'> Fashion is cool, but do you need it? <br> <br> ";
          echo " My recommendation for you is to buy only what you need. <br>
            If you don't need it don't buy it. Your desires are unlimited you will never be satisfied. Remember only to buy the things you need.  <br>
          	  Save your money for  you like the product and need it. Buy it! </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $5,500 and $10,000 per month.    
          	</p> "; 
	}


}


function incidental(){

//this prints all the recommendation for the incidental  depending of the income 
	if(!$GLOBALS['test1']){

		echo "<p>I really hope that you don't get sick. <br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p> In some times, people get sick or broke an arm or crash. Have to pay the damage. <br> ";
          echo "So my recommendation is to open an account for 'Seguro Popular', this will give you free insurance. And will give you in almost all the cases free medicines.<br>
          	But in case you don't want to go or have anothe emergency you have to save money for that. <br>
          	The money I think is a good quantity is $150 per month.    
          	</p> ";
	}
	elseif ($GLOBALS['income']<15000 ) {
          echo "<p> In some times, people get sick or broke an arm or crash. Have to pay the damage. <br> ";
          echo "So my recommendation is to open an account for 'Seguro Popular', this will give you free insurance. And will give you in almost all the cases free medicines.<br>
          	But in case you don't want to go or have anothe emergency you have to save money for that. <br>
          	The money I think is a good quantity is $280 per month.<br>
          	If you can afford an insurance service buy it.     
          	</p> ";
	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p>I hope that the place you work give you insurance. But in case they don't do it, save some money. <br>";

          echo "The money I think is a good quantity for you is $500 per month. Also if you can afford an insurance service buy it.  </p>";
	}

	elseif ($GLOBALS['income']<65000 ) {
          echo "<p>I hope that the place you work give you insurance. But in case they don't do it, buy one. <br>";
          echo "The money I think is a good quantity for you is $1000 to 2000 per month. </p>";
	}
	elseif ($GLOBALS['income']>65000 ) {
           echo "<p>Buy an insurance in case you don't have one. <br>";
          echo "The money I think is a good quantity for you is $1500 to 2500 per month. </p>";
	}

}

function appliances(){
//this prints all the recommendation for the appliances depending of the income  and the difference between the income and the expenses. This print a special format. 
if(!$GLOBALS['test1']){

		echo "<p style='text-align: center;color: #fff;'>Sorry I don't have information for you.<br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p style='text-align: center;color: #fff;'>  So you need a TV, a refrigerator, a washing machine and other appliances. <br> <br> ";
          echo " My recommendation for you: <br>Don't get crazy with your credit card. You can't afford a T.V , a refrigerator, a washing machine, a Stove at the same time. <br>
          	You can use your credit card to pay one or two at maximum.  <br> List your needs, you need a stove and a refrigerator at first. Then you can think about a waching machine, T.V.  
          	 </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $200 and $300 per month.    
          	</p> ";
	}
	elseif ($GLOBALS['income']<15000 ) {
         echo "<p style='text-align: center;color: #fff;'>  So you need a TV, a refrigerator, a washing machine and other appliances. <br> <br> ";
          echo " My recommendation for you: <br>Don't get crazy with your credit card. You can't afford a giant T.V , a refrigerator, a washing machine and a Stove at the same time. <br>
          	You can use your credit card to pay one or two at maximum.  <br> List your needs, you need a stove and a refrigerator at first. Then you can think about a waching machine, T.V.  
          	 </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $300 and $500 per month.    
          	</p> ";
	}
	elseif ($GLOBALS['income']<30000 ) {
           echo "<p style='text-align: center;color: #fff;'>  If you need appliances or to paint your house, just follow this simple rule. <br> <br> ";
          echo " Don't use your credit card like consumerist. <br>
          	You can use your credit card to pay one or two at maximum.  <br> List your needs, Prioritize them, then act.  
          	 </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $700 and $1000 per month.    
          	</p> ";
	}

	elseif ($GLOBALS['income']<65000 ) {
          echo "<p style='text-align: center;color: #fff;'>  If you need appliances or to paint your house, just follow this simple rule. <br> <br> ";
          echo " Don't use your credit card like consumerist. <br>
          	You can use your credit card to pay one or two at maximum.  <br> List your needs, Prioritize them, then act.  
          	 </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $800 and $1200 per month.    
          	</p> ";
	}
	elseif ($GLOBALS['income']>65000 ) {
          echo "<p style='text-align: center;color: #fff;'>  If you need appliances or to paint your house, just follow this simple rule. <br> <br> ";
          echo " Buy only the things you really need. Don't be consumerist. <br> 
          	 </p><br>
          	 <p style='text-align: center;color: #fff;' > The money I think you need to spend is around $1500 and $2000 per month.    
          	</p> ";
	}

}


function savings(){
	//this prints all the recommendation for the savings depending of the income  and the difference between the income and the expenses. This print a special format. 
	if(!$GLOBALS['test1']){

		echo "<p>Sorry I don't have any advice for you.  <br></p>";
 	    
	}elseif ($GLOBALS['income']<8400 ) {
          echo "<p> This part is critically for everyone. People need to start save their money. 
          At the end of this exercise you will have left at least $500.<br><br> I strongly recommend you to start putting the money that was left after this plan to work for you, the recommendation is 20% of your salary after tax. But I know that it is strongly difficult but think about it would be more difficult for you trying to work at you 70's because you never saved money for your retirement. 
          My final suggestion is to save at least $500 in your saving accounto or start investing in low yield 'cetes'   for more information visit this page in Spanish <a href='http://www.cetesdirecto.com/servlet/cetes/inicio' target='_blank'>'Cetes Directo'. </a>     
          	</p>
          	<p>If you are still living with your parents you can give them the money of the Taxes, and maybe half of the supplies (both for food and for appliances). Then 25% you can expend it on entertainment and 25% you can save it.</p> 
          	<p> Please avoid stores like Coppel, Famsa and Elektra. They give credits at a very high yield. </p>";
	}
	elseif ($GLOBALS['income']<15000 ) {
         echo "<p> This part is critically for everyone. People need to start saving their money. 
          At the end of this exercise you will have left at least ".number_format(($GLOBALS['income']*.8)).".<br><br> I strongly recommend you to start putting the money that was left after this plan to work for you, the recommendation is 20% of your salary after tax. But I know that it is strongly difficult but think about it would be more difficult for you trying to work at you 70's because you never saved money for your retirement. 
          My final suggestion is to save at least ".($GLOBALS['income']*.13)." in your saving account or start investing in low yield 'cetes'   for more information visit this page in Spanish <a href='http://www.cetesdirecto.com/servlet/cetes/inicio' target='_blank'>'Cetes Directo'. </a>     
          	</p>
          	<p>If you are still living with your parents you can give them the money of the Taxes, and maybe half of the supplies (both for food and for appliances). Then 25% you can expend it on entertainment and 25% you can save it.</p> ";
	}
	elseif ($GLOBALS['income']<30000 ) {
          echo "<p> This part is critically for everyone. People need to start saving their money. 
          At the end of this exercise you will have left at least ".number_format(($GLOBALS['income']*.10)).".<br><br> I strongly recommend you to start putting the money that was left after this plan to work for you, the recommendation is 20% of your salary after tax.<br>
          My final suggestion is to save at least ".($GLOBALS['income']*.15)." in your saving account or start investing in low yield 'cetes' for more information visit this page in Spanish <a href='http://www.cetesdirecto.com/servlet/cetes/inicio' target='_blank'>'Cetes Directo'. </a> You can start making your money work for you.     
          	</p>
          	<p>If you are still living with your parents, you can give them the money of the Taxes. Half of the supplies (both for food and for appliances). Then 25% you can expend it on entertainment and 25% you can save it.</p> ";
	}
	

	elseif ($GLOBALS['income']<65000 ) {
          echo "<p> This part is critically for everyone. People need to start saving their money. 
          At the end of this exercise you will have left at least ".number_format(($GLOBALS['income']*.16)).".<br><br> I strongly recommend you to start putting the money that was left after this plan to work for you, the recommendation is 20% of your salary after tax.<br>
          My final suggestion is to save at least ".($GLOBALS['income']*.18)." in your saving account or start investing in low yield 'cetes' for more information visit this page in Spanish <a href='http://www.cetesdirecto.com/servlet/cetes/inicio' target='_blank'>'Cetes Directo'. </a> You can start making your money work for you.     
          	</p>
          	";
	}
	elseif ($GLOBALS['income']>65000 ) {
          echo "<p> This part is critically for everyone. People need to start saving their money. 
          At the end of this exercise you will have left at least ".number_format(($GLOBALS['income']*.25)).".<br><br> I strongly recommend you to start putting the money that was left after this plan to work for you, the recommendation is 20% of your salary after tax.<br>
          My final suggestion is to save at least ".($GLOBALS['income']*.20)." in your saving account or start investing in low yield 'cetes' for more information visit this page in Spanish <a href='http://www.cetesdirecto.com/servlet/cetes/inicio' target='_blank'>'Cetes Directo'. </a> You can start making your money work for you.     
          	</p>
          	";
	}

}

//this function checks that you earn more than the basics. 
 function test(){
 	if( $GLOBALS['income']<6000 ||  $GLOBALS['dif']<4000){
 		return false;
 	}
 	return true;

 }	
?>
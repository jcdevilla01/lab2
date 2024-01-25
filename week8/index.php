<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacob Angelo De Villa - profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #f1f1f1;
        }

        h2 {
            color: #555;
        }

        p {
            color: #777;
            line-height: 1.6;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }

        footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
        }
		.main menu {
			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
			background-color: #f4f4f4;
			height: 100vh;
			justify-content: center;
		}
		.main menu > div {
			background-color: #f1f1f1;
			margin: 10px;
			line-height: 75px;
			font-size: 30px;
			display: inline-block;
		}
		
}
    </style>
	<script>
        function startCountdown() {
            const targetBirthday = new Date('2024-06-10T00:00:00');

            function updateCountdown() {
                const now = new Date();
                const timeDifference = targetBirthday - now;

                if (timeDifference > 0) {
                    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    document.getElementById('countdown').innerHTML =
                        `${days}d ${hours}h ${minutes}m ${seconds}s until my birthday!`;
                } else {
                    document.getElementById('countdown').innerHTML = 'Happy Birthday!';
                }
            }

            setInterval(updateCountdown, 1000);

            updateCountdown();
        }
		const Me = {
					  firstName: "Jacob Angelo",
					  middleName: "Corpuz",
					  lastName: "De Villa",
					  age: 21
					  };
		function CallMyName() {
			document.getElementById("nm").innerHTML = Me.firstName + " " + Me.middleName + " " + Me.lastName;
		}
		class profile {
			constructor(firstName, middleName, lastName) {
				this.FirstName = FirstName;
				this.MiddleName = MiddleName;
				this.LastName = LastName;
				this.Age = Age;
			}
    </script>
	<
</head>

<body>

    <header>
        <h1 id="nm">Jacob Angelo De Villa</h1>
        <p>Computer Science Student | Cyber Security</p>
	<div class="main menu">
	  <div>home</div>
	  <div>about me</div>
	  <div>profile</div>  
	  <div>contact</div>
	</div>
	<button onclick="CallMyName()">Click Me For Full Name</button>
    </header>
	
<

    <section>
        <h2><?php echo 'About Me'; ?></h2>
        <p>
            <?php echo "Welcome to my profile! I've been an APC student since senior high at the start of the pandemic. This means that I have been in APC for 4 years.
            and right now, I am a student studying for a degree in bachelor's computer science under cyber security and system forensics. My birthday is on June 10 2002.";
			?>
		</p>
		<button onclick="startCountdown()">My Birthday Countdown</button>
		<p id="countdown"></p>
    </section>

    <section>
        <h2>Fun Facts</h2>
        <ul>
            <li> I have a total of <?php $catnum = 11; 
			print $catnum;
			?> cats at home </li>
            <li>I've watched over <?php
function getFiveHundred() {
    return 500;
}
$result = getFiveHundred();
echo $result; ?> anime </li>
            <li>I love trying out new things </li>
        </ul>
    </section>

    <section>
        <h2>Contacts</h2>
        <p>Feel free to reach out to me. Let's connect!</p>
        <ul>
            <li>Email: <a href="mailto:jacobdevilla@gmail.com">jacobdevilla@gmail.com</a></li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/jacob-de-villa-193a801b4/" target="_blank">LinkedIn</a></li>
            <li>GitHub: <a href="https://github.com/jcdevilla01" target="_blank">GitHub</a></li>
        </ul>
    </section>
	<script>
        function showMessage() {
            document.getElementById("message").innerText = "Hello! Thanks for visiting my profile.";
        }
    </script>
    <footer>
         2024 Jacob Angelo De Villa - Profile
    </footer>
	

</body>

</html>

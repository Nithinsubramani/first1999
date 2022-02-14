<body>

<h1 >Welcome to javascript</h1>



<h2 id="click" >Hello this is nithin



</h2>



<button onclick="red()"> Click here </button>

<!-- <button onclick="style()">click here again</button> -->



<script>

    function red() {

        let click = document.getElementById('click');

        click.innerHTML = "Hello this is nithin";

        click.style.color = "red"

    }

</script>



</body>

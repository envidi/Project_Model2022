<script>
    const parseNum = document.querySelector(".parseNumber");
    const price = document.querySelector("#price_product");
    if (price) {
   
        price.addEventListener("input", function(e) {

            parseNum.innerHTML = e.target.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")

        })
    }
</script>

</body>

</html>
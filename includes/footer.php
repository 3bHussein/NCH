    


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- <script src="plugins/apex/apexcharts.min.js"></script> -->
    <script src="assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- my script -->
    <script>
    function otherFunction() {
      var v=  document.getElementById("other").value;
        if(v == 'oth'){
        document.getElementById("othertxt").style.display="block";
        }
        else
        {
            document.getElementById("othertxt").style.display="none";

        }
   }

    function milFunction() {
      document.getElementById("mili").style.display = "none";
      document.getElementById("mili2").style.display = "none";
   }
    function miliFunction() {
         document.getElementById("mili").style.display = "block";
         document.getElementById("mili2").style.display = "block";
    }

    function natFunction()
    {
        var t = document.getElementById("nat").value;
        console.log(t);
        switch (t){
            case 'أخرى':
             document.getElementById("misr").style.display="none";
             document.getElementById("international").style.display="block";
             document.getElementById("idnum").style.display="none";
             document.getElementById("passnum").style.display="block";
             break;
             case 'مصر':
                document.getElementById("international").style.display="none";
                document.getElementById("misr").style.display="block";
                document.getElementById("idnum").style.display="block";
             document.getElementById("passnum").style.display="none";
             break;
           
      }
    }

    function dateFunction()
    {
        var d = document.getElementById('date').value;
        console.log (d);
        var y = parseInt(d)+1;
        document.getElementById('DATE').setAttribute("value", y);
    }

    function dipFunction()
    {
        var d = document.getElementById('diplom').value;
        console.log(d);

        if(d== 'شهاده معادله')
        {
            document.getElementById('diplo').style.display="block";
        }
        else
        {
            document.getElementById('diplo').style.display="none";

        }
    }
</script>
</body>
</html>
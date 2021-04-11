<script>
   
    var end = $( "#endofpage" );
    var position = end.position();
    var screenheight = <?php echo json_encode($_SESSION['screen_height']); ?>;
    alert(position);
    if( 0.75*screenheight >= position){
        end.innerHTML = "marche";
        var footer = $( "#footer" );
        footer.class = "bg-dark text-center text-white myfooter sticky-bottom";
    }

</script>
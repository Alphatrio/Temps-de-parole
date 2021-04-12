
var end = $( "#endofpage" );
var position = p.position();
var screenheight = <?php echo json_encode($_SESSION['screen_height']); ?>;
if( 0.75*screenheight >= position){
    end.innerHTML = "marche";
    var footer = $( "#footer" );
    footer.class = "bg-dark text-center text-white myfooter sticky-bottom";
}


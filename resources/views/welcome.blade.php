<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToG : New World Wiki</title>
    <link href="/css/app.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <link href="css/stars.css" rel="stylesheet">
</head>
<body>

    <div class="bg-animation">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
    </div>

    <div class="vertical-image left">
        <img loading="lazy" src="/images/fondo4.png" alt="Left Vertical Image">
    </div>

    <!-- Right vertical image -->
    <div class="vertical-image right">
        <img loading="lazy" src="/images/fondo4.png" alt="Right Vertical Image">
    </div>

    <nav class="navbar">
        <a id="reset">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="asterisk" class="svg-inline--fa fa-asterisk " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="18"><path fill="currentColor" d="M417.1 368c-5.937 10.27-16.69 16-27.75 16c-5.422 0-10.92-1.375-15.97-4.281L256 311.4V448c0 17.67-14.33 32-31.1 32S192 465.7 192 448V311.4l-118.3 68.29C68.67 382.6 63.17 384 57.75 384c-11.06 0-21.81-5.734-27.75-16c-8.828-15.31-3.594-34.88 11.72-43.72L159.1 256L41.72 187.7C26.41 178.9 21.17 159.3 29.1 144C36.63 132.5 49.26 126.7 61.65 128.2C65.78 128.7 69.88 130.1 73.72 132.3L192 200.6V64c0-17.67 14.33-32 32-32S256 46.33 256 64v136.6l118.3-68.29c3.838-2.213 7.939-3.539 12.07-4.051C398.7 126.7 411.4 132.5 417.1 144c8.828 15.31 3.594 34.88-11.72 43.72L288 256l118.3 68.28C421.6 333.1 426.8 352.7 417.1 368z"></path></svg>
        </a>
        <a ><img loading="lazy" id="rarity" src="/images/rarity/ssr.png"></a>
        <a ><img loading="lazy" id="rarity" src="/images/rarity/ssrplus.png"></a>

        <a ><img loading="lazy" id="color" src="/images/elements/yellow.png"></a>
        <a ><img loading="lazy" id="color" src="/images/elements/purple.png"></a>
        <a ><img loading="lazy" id="color" src="/images/elements/red.png"></a>
        <a ><img loading="lazy" id="color" src="/images/elements/green.png"></a>
        <a ><img loading="lazy" id="color" src="/images/elements/blue.png"></a>

        <a ><img loading="lazy" id="class" src="/images/types/magic.png"></a>
        <a ><img loading="lazy" id="class" src="/images/types/physical.png"></a>

        <a ><img loading="lazy" id="type" src="/images/classes/assassin.png"></a>
        <a ><img loading="lazy" id="type" src="/images/classes/mage.png"></a>
        <a ><img loading="lazy" id="type" src="/images/classes/ranged.png"></a>
        <a ><img loading="lazy" id="type" src="/images/classes/support.png"></a>
        <a ><img loading="lazy" id="type" src="/images/classes/tank.png"></a>
        <a ><img loading="lazy" id="type" src="/images/classes/warrior.png"></a>

        <a><input type="text" id="searchInput" placeholder="Search..."></a>
    </nav>

    <div id="image-container" class="image-container">
    {!! $data !!}
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            agregarClick();
            
            $(document).ready(function() {
                $('#reset').click(function() {
                    // Send an AJAX request to your controller method
                    $.ajax({
                        url: '{{ route('welcome') }}',
                        type: 'GET',
                        dataType: 'json',  // Specify that you expect a JSON response
                        success: function(response) {
                            // Extract the HTML data from the JSON response
                            const data = response.data;
                            // Update the container's HTML content
                            $('.image-container').html(data);
                            agregarClick();
                        },
                        error: function() {
                            alert('Error loading characters.');
                        }
                    });
                });
            });
        }, false);
    </script>
    
    <script type="text/javascript" src="/js/filters.js"></script>
</body>
</html>

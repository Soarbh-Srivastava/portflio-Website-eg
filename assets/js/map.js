function initMap() {
    // Styles a map in night mode.
    var map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 30.705903211898203, lng: 76.68572680089882 },
        zoom: 12,
        styles: [
            // Add your custom map styles here if needed.
        ]
    });

    var marker = new google.maps.Marker({
        position: { lat: 30.705903211898203, lng: 76.68572680089882 },
        map: map,
        title: "Vivek Malik"
    });

    // Add a click event listener to the marker
    marker.addListener("click", function() {
        // Open Google Maps with the specified location
        window.open("https://www.google.com/maps?q=30.705903211898203,76.68572680089882&hl=en", "_blank");
    });
}

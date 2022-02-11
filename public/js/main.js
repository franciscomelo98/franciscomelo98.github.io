const panoImage = document.querySelector('.pano-image');
const panorama = new PANOLENS.ImagePanorama(img);
const viewer = new PANOLENS.Viewer({
    container: panoImage
});

viewer.add(panorama);
function ratingStars(star) {
    const STAR1 = document.getElementById("star-1");
    const STAR2 = document.getElementById("star-2");
    const STAR3 = document.getElementById("star-3");
    const STAR4 = document.getElementById("star-4");
    const STAR5 = document.getElementById("star-5");

    if (star == 1) {
        STAR1.classList.remove("empty-star");
        STAR1.classList.add("full-star");

        STAR2.classList.remove("full-star");
        STAR2.classList.add("empty-star");

        STAR3.classList.remove("full-star");
        STAR3.classList.add("empty-star");

        STAR4.classList.remove("full-star");
        STAR4.classList.add("empty-star");

        STAR5.classList.remove("full-star");
        STAR5.classList.add("empty-star");

    } else if (star == 2) {
        STAR1.classList.remove("empty-star");
        STAR1.classList.add("full-star");

        STAR2.classList.remove("empty-star");
        STAR2.classList.add("full-star");

        STAR3.classList.remove("full-star");
        STAR3.classList.add("empty-star");

        STAR4.classList.remove("full-star");
        STAR4.classList.add("empty-star");

        STAR5.classList.remove("full-star");
        STAR5.classList.add("empty-star");
    } else if (star == 3) {
        STAR1.classList.remove("empty-star");
        STAR1.classList.add("full-star");

        STAR2.classList.remove("empty-star");
        STAR2.classList.add("full-star");

        STAR3.classList.remove("empty-star");
        STAR3.classList.add("full-star");

        STAR4.classList.remove("full-star");
        STAR4.classList.add("empty-star");

        STAR5.classList.remove("full-star");
        STAR5.classList.add("empty-star");

    } else if (star == 4) {
        STAR1.classList.remove("empty-star");
        STAR1.classList.add("full-star");

        STAR2.classList.remove("empty-star");
        STAR2.classList.add("full-star");

        STAR3.classList.remove("empty-star");
        STAR3.classList.add("full-star");

        STAR4.classList.remove("empty-star");
        STAR4.classList.add("full-star");

        STAR5.classList.remove("full-star");
        STAR5.classList.add("empty-star");

    } else if (star == 5) {
        STAR1.classList.remove("empty-star");
        STAR1.classList.add("full-star");

        STAR2.classList.remove("empty-star");
        STAR2.classList.add("full-star");

        STAR3.classList.remove("empty-star");
        STAR3.classList.add("full-star");

        STAR4.classList.remove("empty-star");
        STAR4.classList.add("full-star");

        STAR5.classList.remove("empty-star");
        STAR5.classList.add("full-star");
    }
}
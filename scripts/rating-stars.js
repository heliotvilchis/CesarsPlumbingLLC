function ratingStars(star) {
    const STAR1 = document.getElementById("rating-1");
    const STAR2 = document.getElementById("rating-2");
    const STAR3 = document.getElementById("rating-3");
    const STAR4 = document.getElementById("rating-4");
    const STAR5 = document.getElementById("rating-5");

    if (star == 1) {
        STAR1.classList.remove("unchecked");
        STAR1.classList.add("checked");

        STAR2.classList.remove("checked");
        STAR2.classList.add("unchecked");

        STAR3.classList.remove("checked");
        STAR3.classList.add("unchecked");

        STAR4.classList.remove("checked");
        STAR4.classList.add("unchecked");

        STAR5.classList.remove("checked");
        STAR5.classList.add("unchecked");

    } else if (star == 2) {
        STAR1.classList.remove("unchecked");
        STAR1.classList.add("checked");

        STAR2.classList.remove("unchecked");
        STAR2.classList.add("checked");

        STAR3.classList.remove("checked");
        STAR3.classList.add("unchecked");

        STAR4.classList.remove("checked");
        STAR4.classList.add("unchecked");

        STAR5.classList.remove("checked");
        STAR5.classList.add("unchecked");
    } else if (star == 3) {
        STAR1.classList.remove("unchecked");
        STAR1.classList.add("checked");

        STAR2.classList.remove("unchecked");
        STAR2.classList.add("checked");

        STAR3.classList.remove("unchecked");
        STAR3.classList.add("checked");

        STAR4.classList.remove("checked");
        STAR4.classList.add("unchecked");

        STAR5.classList.remove("checked");
        STAR5.classList.add("unchecked");

    } else if (star == 4) {
        STAR1.classList.remove("unchecked");
        STAR1.classList.add("checked");

        STAR2.classList.remove("unchecked");
        STAR2.classList.add("checked");

        STAR3.classList.remove("unchecked");
        STAR3.classList.add("checked");

        STAR4.classList.remove("unchecked");
        STAR4.classList.add("checked");

        STAR5.classList.remove("checked");
        STAR5.classList.add("unchecked");

    } else if (star == 5) {
        STAR1.classList.remove("unchecked");
        STAR1.classList.add("checked");

        STAR2.classList.remove("unchecked");
        STAR2.classList.add("checked");

        STAR3.classList.remove("unchecked");
        STAR3.classList.add("checked");

        STAR4.classList.remove("unchecked");
        STAR4.classList.add("checked");

        STAR5.classList.remove("unchecked");
        STAR5.classList.add("checked");
    }
}
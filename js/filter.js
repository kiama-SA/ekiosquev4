function filterNewspapers() {
    let x = document.getElementById("choice-newspapers");
    let y = document.getElementById("choice-articles");

    let z = document.getElementById("latest-newspapers");
    let t = document.getElementById("latest-articles");

    x.classList.add("active-option");
    y.classList.remove("active-option");

    t.classList.add("hidden")
    z.classList.remove("hidden")

}
function filterArticles() {
    let x = document.getElementById("choice-newspapers");
    let y = document.getElementById("choice-articles");

    let z = document.getElementById("latest-newspapers");
    let t = document.getElementById("latest-articles");

    x.classList.remove("active-option");
    y.classList.add("active-option");
    z.classList.add("hidden")
    t.classList.remove("hidden")

}
function filterNewspapersMd() {
    let x = document.getElementById("choice-newspapers-md");
    let y = document.getElementById("choice-articles-md");

    let z = document.getElementById("latest-newspapers-md");
    let t = document.getElementById("latest-articles-md");

    x.classList.add("active-option");
    y.classList.remove("active-option");

    t.classList.add("hidden")
    z.classList.remove("hidden")

}
function filterArticlesMd() {
    let x = document.getElementById("choice-newspapers-md");
    let y = document.getElementById("choice-articles-md");

    let z = document.getElementById("latest-newspapers-md");
    let t = document.getElementById("latest-articles-md");

    x.classList.remove("active-option");
    y.classList.add("active-option");
    z.classList.add("hidden")
    t.classList.remove("hidden")

}
function filterNewspapersSm() {
    let x = document.getElementById("choice-newspapers-sm");
    let y = document.getElementById("choice-articles-sm");

    let z = document.getElementById("latest-newspapers-sm");
    let t = document.getElementById("latest-articles-sm");

    x.classList.add("active-option");
    y.classList.remove("active-option");

    t.classList.add("hidden")
    z.classList.remove("hidden")

}
function filterArticlesSm() {
    let x = document.getElementById("choice-newspapers-sm");
    let y = document.getElementById("choice-articles-sm");

    let z = document.getElementById("latest-newspapers-sm");
    let t = document.getElementById("latest-articles-sm");

    x.classList.remove("active-option");
    y.classList.add("active-option");
    z.classList.add("hidden")
    t.classList.remove("hidden")

}
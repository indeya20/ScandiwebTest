
const map = {
    "DVD": "DVD",
    "Book": "Book",
    Furniture: "furniture"
};

function prodType(value) {
    document
    .querySelectorAll(".productType")
    .forEach((node) => (node.style.display = "none"));

    document.getElementById(map[value]).style.display = "block";
}

{
document.getElementById("productType").selectedIndex= -1;
}
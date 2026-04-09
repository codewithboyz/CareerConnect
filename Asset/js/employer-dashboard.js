const menuBtn = document.getElementById("menuBtn");
const sidebar = document.getElementById("sidebar");
const links = document.querySelectorAll(".emplink");

menuBtn.onclick = () => sidebar.classList.toggle("show");

window.onclick = (e) => {
  if (!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
    sidebar.classList.remove("show");
  }
};

document.querySelectorAll("tr").forEach((row) => {
  const text = row.innerText.toLowerCase();
  if (text.includes("pending")) row.classList.add("status-pending");
  else if (text.includes("shortlisted") || text.includes("accepted"))
    row.classList.add("status-success");
});

links.forEach((link) => {
  link.addEventListener("click", function () {
    // remove the color from all link
    links.forEach((lk) => (lk.style.color = "#b4b4b7"));
    //add the color from click link
    this.style.color = "blue";
  });
});

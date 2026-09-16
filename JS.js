Close Save View jfjhxboc/3.4 + 3.8 Iteration project/js/JS.jsAutoSave

1
const dropdownWrapper = document.getElementById('dropdownWrapper');
2
const dropdownMenu = document.getElementById('dropdownMenu');
3
​
4
let timeoutId;
5
​
6
dropdownWrapper.addEventListener('mouseenter', () => {
7
  clearTimeout(timeoutId);
8
  dropdownMenu.classList.add('show');
9
});
10
​
11
dropdownWrapper.addEventListener('mouseleave', () => {
12
  timeoutId = setTimeout(() => {
13
    dropdownMenu.classList.remove('show');
14
  }, 150); // delay hides menu gently
15
});
16
​
17
​
18
​
19
​
20
​
21
// Fullscreen nav
22
function openNav() {
23
    document.getElementById("myNav").style.width = "100%";
24
}
25
​
26
function closeNav() {
27
    document.getElementById("myNav").style.width = "0%";
28
}
29
​
30
// Get the button
31
​
32
​
33
// Setup function to control my button scroll
34
window.onscroll = function() {scrollFunction()};
35
​
36
​
37
function scrollFunction() {
38
    let mybutton = document.getElementById("myBtn");
39
    
40
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
41
        mybutton.style.display = "block";
42
    } else { 
43
      mybutton.style.display = "none";
44
    }
45
}
46
​
47
​
48
function topFunction() {
49
    document.body.scrollTop = 0;
50
    document.documentElement.scrollTop = 0;
51
}

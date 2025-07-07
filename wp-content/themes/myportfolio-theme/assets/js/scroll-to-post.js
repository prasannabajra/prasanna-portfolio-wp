document.addEventListener('DOMContentLoaded', function() {
    // Check if we are on a single post page and if the 'blog-post-content' element exists
    if (document.body.classList.contains('single-post') || document.body.classList.contains('single')) {
        var blogContent = document.getElementById('blog-post-content');
        if (blogContent) {
            // Scroll to the element with smooth behavior
            blogContent.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
});
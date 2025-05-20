<script>
    function toggleSidebar() {
        const sidebar = document.querySelector(".sidebar");
        const content = document.querySelector(".content");
        const backIcon = document.querySelector(".back-icon");

        sidebar.classList.toggle("collapsed");
        content.classList.toggle("expanded");
        backIcon.classList.toggle("rotate");
    }
</script>
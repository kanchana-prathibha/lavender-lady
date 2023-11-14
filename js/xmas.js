document.addEventListener('DOMContentLoaded', function () {
    const snowflakesContainer = document.querySelector('.snowflakes');

    function createSnowflake() {
        const snowflake = document.createElement('div');
        snowflake.classList.add('snowflake');
        snowflake.innerHTML = '.';

        const randomSize = Math.random() * 1.5 + 0.5;
        snowflake.style.fontSize = `${randomSize}em`;

        const randomPosition = Math.random() * 100;
        snowflake.style.left = `${randomPosition}vw`;

        const animationDuration = Math.random() * 2 + 2;
        snowflake.style.animationDuration = `${animationDuration}s`;

        snowflakesContainer.appendChild(snowflake);

        snowflake.addEventListener('animationend', function () {
            snowflake.remove();
        });
    }

    setInterval(createSnowflake, 100);
});

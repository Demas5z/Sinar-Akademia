<style>
.accordion-item {
    background: #e8f8f1;
    border-radius: 5px;
    overflow: hidden;
}

.accordion-header {
    padding: 15px 20px;
    background: #c8ebe0;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.accordion-header:hover {
    background: #a8dfcc;
}
</style>
<div class="accordion-item">
    <div class="accordion-header">
        {{ $slot }}
    </div>
</div>

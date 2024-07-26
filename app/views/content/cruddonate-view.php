<div class="container">
    <div class="donation-section">
        <div class="donation-header">
            <h1 class="donation-title">Ayuda a Nuestros Amigos Peludos</h1>
            <p class="donation-description">Tu donación puede marcar la diferencia en la vida de muchos animales.</p>
        </div>
        <form action="procesar_donacion.php" method="POST" class="donation-form login">
            <div class="form-group">
                <label for="donationAmount" class="form-label">Monto de la Donación</label>
                <input type="number" class="form-control" id="donationAmount" name="donationAmount" placeholder="Ingresa el monto que deseas donar" required>
            </div>
            <div class="form-group">
                <label for="donorName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="donorName" name="donorName" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <label for="donorEmail" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="donorEmail" name="donorEmail" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <button type="submit" class="donation-button btn-warning">Donar</button>
        </form>
    </div>
</div>

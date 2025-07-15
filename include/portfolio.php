<div class="section px-3 px-lg-4 pt-5" id="portfolio">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Projelerim</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">E-Ticaret Sitesi </h3>
                <div class="text-muted text-small">ASP .Net Core</div>
              </div>
              <a href="https://github.com/berkantkaraca/MultiShop" class="btn btn-primary" target="_blank">Projeyi
                incele</a>
            </div>
          </div>
          <div class="card-body px-3 py-2">

            <p>Modern mikroservis mimarisi ile geliştirilmiş e-ticaret platformudur.</p>

            <p>Mimari Tasarım Desenleri</p>
            <ul>
              <li>CQRS (Command Query Responsibility Segregation)</li>
              <li>Mediator Pattern</li>
              <li>Repository Pattern</li>
              <li>Onion Architecture</li>
              <li>N-Layer Architecture</li>
            </ul>

            <p>Temel Özellikler</p>
            <ul>
              <li><strong>Kullanıcı Yönetimi:</strong> Güvenli kayıt/giriş, JWT token tabanlı kimlik doğrulama</li>
              <li><strong>Ürün Yönetimi:</strong> Kategori bazlı ürün listeleme, arama ve filtreleme</li>
              <li><strong>Sepet İşlemleri:</strong> Dinamik sepet yönetimi, Redis ile performanslı cache</li>
              <li><strong>İndirim Sistemi:</strong> Kupon kodları ile esnek indirim mekanizması</li>
              <li><strong>Admin Paneli:</strong> Kapsamlı yönetim arayüzü, istatistikler ve raporlama</li>
            </ul>

            <p>Güvenlik Özellikleri</p>
            <ul>
              <li><strong>JWT Token Authentication:</strong> Güvenli oturum yönetimi</li>
              <li><strong>IdentityServer4:</strong> Merkezi kimlik doğrulama servisi</li>
              <li><strong>CORS Politikaları:</strong> Cross-origin güvenlik kontrolü</li>
              <li><strong>HTTPS/SSL:</strong> Güvenli veri iletimi</li>
              <li><strong>Role-Based Authorization:</strong> Rol bazlı yetkilendirme</li>
            </ul>

            <p>Mikroservis Yapısı</p>
            <div>
              <table class="table table-striped table-hover">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Mikroservis</th>
                    <th scope="col">Açıklama</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td><strong>API Gateway (Ocelot)</strong></td><td>İstek yönlendirme</td></tr>
                  <tr><td><strong>Identity Server</strong></td><td>Kimlik doğrulama</td></tr>
                  <tr><td><strong>Catalog</strong></td><td>Ürün kataloğu</td></tr>
                  <tr><td><strong>Discount</strong></td><td>İndirim kuponları</td></tr>
                  <tr><td><strong>Order</strong></td><td>Sipariş yönetimi</td></tr>
                  <tr><td><strong>Cargo</strong></td><td>Kargo işlemleri</td></tr>
                  <tr><td><strong>Basket</strong></td><td>Sepet yönetimi</td></tr>
                  <tr><td><strong>Comment</strong></td><td>Ürün yorumları</td></tr>
                  <tr><td><strong>Message</strong></td><td>Mesajlaşma sistemi</td></tr>
                </tbody>
              </table>
            </div>

            <br>
            <p>Kullanılan Teknolojiler</p>
            <ul>
              <li><strong>Backend Framework:</strong> ASP.NET Core 6.0</li>
              <li><strong>Mimari:</strong> Mikroservis Mimarisi</li>
              <li><strong>API Gateway:</strong> Ocelot</li>
              <li><strong>Kimlik Yönetimi:</strong> IdentityServer4</li>
              <li><strong>Veritabanları:</strong>
                <ul>
                  <li>MongoDB (Catalog)</li>
                  <li>Redis (Basket - NoSQL)</li>
                  <li>MSSQL Server (Order, Cargo, Comment, Identity)</li>
                  <li>PostgreSQL (Message)</li>
                </ul>
              </li>
              <li><strong>ORM Teknolojileri:</strong> Entity Framework Core, Dapper</li>
              <li><strong>Container:</strong> Docker</li>
              <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript, Bootstrap, Ajax</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_header(); ?>
<main>
  <?php get_template_part('parts/breadcrumbs-section'); ?>
  <section>
    <div class="container">
      <div class="row flex-nowrap">
         <?php get_template_part('parts/sidebar-services')?>
          <div class="col py-3 bg-body-tertiary" id="post-<?php the_ID();?>">

            <?php
            while(have_posts()):
              the_post();
            ?>

             <div class="d-flex justify-content-center gap-2 flex-wrap">
              <img class="d-block" src="https://via.placeholder.com/640x480.png/004466?text=animals+omnis" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"
                style="max-width: 100%; width: 450px; height: 320px;"/>
              <img class="d-block" src="https://via.placeholder.com/360x360.png/00bbcc?text=animals+cats+vero" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"
                style="max-width: 100%; width: 450px; height: 320px;"/>
             </div>

            <div>
              <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <h6 class="text-center text-uppercase">Hizmete genel bakış</h6>
                <div class="service-line"></div>
              </div>
              <p>Anahtar teslimi yenileme, dairenin tamamında veya ayrı bir odada yapılan işlerin tam listesini içerir. Bu durumda, bir şirket odayı tamamen yeniler: duvarları düzleştirir, elektrik kablolarını döşer, duvarları, tavanı vb. bitirir. Daireyi yeniledikten sonra geriye kalan tek şey mobilya ve ev aletlerinin düzenlenmesidir. Ek bir çalışmaya gerek yoktur.</p>

              <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <h6 class="text-center text-uppercase">Plan ve ayrıntılar</h6>
                <div class="service-line"></div>
              </div>

              <ul class="list-group">
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> Proje geliştirme. Bunu yapmak için tesisi incelemeniz, gerekli ölçümleri yapmanız ve bir plan hazırlamanız gerekir.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> Tahminlerin hazırlanması, onarım bütçesinin hesaplanması. İşin ve malzemelerin maliyeti müşteri ile kararlaştırılır ve sözleşmeye yansıtılır.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> İnşaat ve kaplama malzemelerinin satın alınması. Eğer daire sahibi malzemeleri kendisi almak istiyorsa bu adım atlanır.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> Mevcut kaplamanın sökülmesi. Yeni bir binada bitirmeden bir daire için bu aşamaya gerek yoktur.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> Elektrik kablolarının kurulumu veya değiştirilmesi.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> Duvarları, zeminleri, tavanları tesviye etmek.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> Bitiricilik. Son işlem teknolojisi seçilen malzemelere bağlıdır. Duvarlarda duvar kağıdı, dekoratif sıva ve boya kullanılabilir. Döşeme için - linolyum, parke, laminat, ahşap. Tavan için - boya, streç kumaş, asma yapılar.</li>
                <li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i> İnşaat atıklarının uzaklaştırılması.</li>
              </ul>
              <p>
                <i class="fa-solid fa-triangle-exclamation text-warning"></i>
              Bu bir örnek listedir. Belirli bir projede işin karmaşıklığına, tesisin amacına ve durumuna bağlı olarak azaltılabilir veya genişletilebilir. Örneğin, anahtar teslimi bir banyo yenilemesi aynı zamanda eski tesisatın sökülmesini ve yeni tesisatın kurulmasını, kanalizasyon borularının değiştirilmesini ve havalandırmanın temizlenmesini de içerir.
              </p>
              <p>
              <i class="fa-solid fa-triangle-exclamation text-warning"></i>
              İşin tam maliyeti keşif ve sözleşmede belirtilir. İşin tamamlanmasından önce ek eylemlerin veya malzemelerin gerekli olduğu ortaya çıkarsa, bunların maliyetleri ek sözleşmede belirtilmelidir.
              </p>
            </div>

            <div>

              <div>
                <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                  <h6 class="text-center text-uppercase">Anahtar teslimi daire yenilemenin avantajları:</h6>
                  <div class="service-line"></div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item"><i class="fa-solid fa-thumbs-up text-warning"></i> Kolaylık. Tüm işler tek bir ekip tarafından yapılır. Farklı iş türlerini gerçekleştirmek için birden fazla yüklenici ile iletişime geçmenize gerek yoktur.</li>
                  <li class="list-group-item"><i class="fa-solid fa-thumbs-up text-warning"></i> Fayda. Bir iş kompleksinin fiyatı, birkaç ayrı hizmet sipariş etmekten daha düşüktür.</li>
                  <li class="list-group-item"><i class="fa-solid fa-thumbs-up text-warning"></i> Kısa zaman. Tüm işler tek bir usta ekibi tarafından gerçekleştirilir. Bu, her servisi ayrı ayrı sipariş etmekten veya onarımı kendiniz yapmaktan daha az zaman gerektirir.</li>
                  <li class="list-group-item"><i class="fa-solid fa-thumbs-up text-warning"></i> Tadilat planlanırken ev sahibinin tüm istekleri ve aile üyelerinin ihtiyaçları dikkate alınır. Onarımın tamamlanmasının ardından müşteriye tamamen gerçekleştirilmiş bir tasarım projesi verilir.</li>
                </ul>
              </div>

              <div>
                <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                  <h6 class="text-center text-uppercase">Popüler sorular</h6>
                  <div class="service-line"></div>
                </div>

                <div class="accordion accordion-flush" id="accordionExample">

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <i class="fa-solid fa-person-circle-question text-warning"></i>&nbsp; Anahtar teslimi onarımların maliyetine neler dahildir, neye bağlıdır?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      İşin fiyatı, proje geliştirilip bir tahmin yapıldıktan sonra hesaplanır. Aşağıdaki faktörlerden etkilenir: çalışmanın yapılacağı daire veya odanın alanı, yeniden geliştirme ihtiyacı, başlangıç ​​durumu ve işlerin listesi, kullanılan inşaat ve kaplama malzemelerinin sınıfı, aciliyet
                      </div>
                    </div>
                  </div>                  

                </div>               

              </div>

            </div>

            <?php endwhile; ?>

          </div>
      </div>
    </div>  
  </section>  
</main>

<?php get_footer(); ?>
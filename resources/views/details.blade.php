@extends('layouts.app')

@section('content')
<style>
  .filled-heart{
    color: #d76b67;
  }
  
  /* Màu cho giá sản phẩm sau khi giảm */
  .current-price {
    color: #d76b67;
  }
  
  /* Màu cho nút thêm vào giỏ hàng */
  .btn-primary {
    background-color: #ff4d2e !important;
    border-color: #ff4d2e !important;
  }
  .btn-primary:hover {
    background-color: #e63946 !important;
    border-color: #e63946 !important;
  }
  
  /* Màu cho các nút tab */
  .nav-link_underscore {
    color: #ff4d2e!important;
  }
  .nav-link_underscore:hover,
  .nav-link_underscore.active {
    color: #39539A !important;
  }
  
  /* Màu cho tiêu đề sản phẩm liên quan */
  .h3.text-uppercase strong {
    color: #ff4d2e;
  }
  

</style>
<main class="pt-90">
    <div class="mb-md-1 pb-md-3"></div>
    <section class="product-single container">
      <div class="row">
        <div class="col-lg-7">
          <div class="product-single__media" data-media-type="vertical-thumbnail">
            <div class="product-single__image">
              <div class="swiper-container">
                <div class="swiper-wrapper">

                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" class="h-auto" src="{{ asset('uploads/products/')}}/{{ $product->image }}" width="674" height="674" alt="" />
                    <a data-fancybox="gallery" href="{{ asset('uploads/products/')}}/{{ $product->image }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Phóng to">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_zoom" />
                      </svg>
                    </a>
                  </div>

                  @foreach (explode(',', $product->images) as $gimg)
                  <div class="swiper-slide product-single__image-item">
                    <img loading="lazy" class="h-auto" src="{{ asset('uploads/products/')}}/{{ $gimg }}" width="674"
                      height="674" alt="" />
                    <a data-fancybox="gallery" href="{{ asset('uploads/products/')}}/{{ $gimg }}" data-bs-toggle="tooltip"
                      data-bs-placement="left" title="Phóng to">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_zoom" />
                      </svg>
                    </a>
                  </div>
                  @endforeach
                  
                </div>
                <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_sm" />
                  </svg></div>
                <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_next_sm" />
                  </svg></div>
              </div>
            </div>
            <div class="product-single__thumbnail">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="{{ asset('uploads/products/thumbnails/')}}/{{ $product->image }}" width="104" height="104" alt="" /></div>
                  @foreach (explode(',', $product->images) as $gimg)
                  <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="{{ asset('uploads/products/')}}/{{ $gimg }}" width="104" height="104" alt="" /></div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="d-flex justify-content-between mb-4 pb-md-2">
            <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
              <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Trang chủ</a>
              <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
              <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Cửa hàng</a>
            </div><!-- /.breadcrumb -->

            <div
              class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
              <a href="#" class="text-uppercase fw-medium"><svg width="10" height="10" viewBox="0 0 25 25"
                  xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_prev_md" />
                </svg><span class="menu-link menu-link_us-s">Trước</span></a>
              <a href="#" class="text-uppercase fw-medium"><span class="menu-link menu-link_us-s">Tiếp</span><svg
                  width="10" height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_next_md" />
                </svg></a>
            </div><!-- /.shop-acs -->
          </div>
          <h1 class="product-single__name">{{$product->name}}</h1>
          <div class="product-single__rating">
            <div class="reviews-group d-flex">
              <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_star" />
              </svg>
              <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_star" />
              </svg>
              <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_star" />
              </svg>
              <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_star" />
              </svg>
              <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_star" />
              </svg>
            </div>
            <span class="reviews-note text-lowercase text-secondary ms-1">8k+ đánh giá</span>
          </div>
          <div class="product-single__price">
            <span class="current-price">
                @if ($product->sale_price)
                    <s>{{ number_format($product->regular_price) }}đ</s> {{ number_format($product->sale_price) }}đ
                @else
                    {{ number_format($product->regular_price) }}đ
                @endif
            </span>
          </div>
          @if ($product->sale_price)
            <div class="mt-2">
                <img src="{{ asset('assets/images/sale.gif') }}" alt="Ưu đãi sốc" style="width:100%;max-width:545px; margin-bottom: 30px;">
            </div>
          @endif
          <div class="product-single__short-desc">
            <p>{{$product->short_description}}</p>
          </div>
          @if (Cart::instance('cart')->content()->where('id', $product->id)->count() > 0)
          <a href="{{ route('cart.index') }}" class="btn btn-warning mb-3">Xem giỏ hàng</a>
          @else
          <form name="addtocart-form" method="post" action="{{ route('cart.add') }}">
            @csrf
            <div class="product-single__addtocart">
              <div class="qty-control position-relative">
                <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
                <div class="qty-control__reduce">-</div>
                <div class="qty-control__increase">+</div>
              </div><!-- .qty-control -->
              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->name }}">
              <input type="hidden" name="price" value="{{ $product->sale_price == '' ? $product->regular_price : $product->sale_price }}">
              <button type="submit" class="btn btn-primary btn-addtocart" data-aside="cartDrawer">Thêm vào giỏ hàng</button>
            </div>
          </form>
          @endif
          <div class="product-single__addtolinks">
            @if(Cart::instance('wishlist')->content()->where('id', $product->id)->count() > 0)
            <form action="{{ route('wishlist.remove.item', ['rowId' => Cart::instance('wishlist')->content()->where('id', $product->id)->first()->rowId]) }}" method="POST" id="remove-from-wishlist-form">
              @csrf
              @method('DELETE')
            <a href="javascript:void(0)" class="menu-link menu-link_us-s add-to-wishlist filled-heart" onclick="document.getElementById('remove-from-wishlist-form').submit()"><svg width="16" height="16" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_heart" />
              </svg><span>Xóa khỏi danh sách yêu thích</span></a>
            </form>
            @else
            <form action="{{ route('wishlist.add') }}" method="POST" id="add-to-wishlist-form">
              @csrf
              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->name }}">
              <input type="hidden" name="price" value="{{ $product->sale_price == '' ? $product->regular_price : $product->sale_price }}">
              <input type="hidden" name="quantity" value="1">
            <a href="javascript:void(0)" class="menu-link menu-link_us-s add-to-wishlist" onclick="document.getElementById('add-to-wishlist-form').submit()"><svg width="16" height="16" viewBox="0 0 20 20"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_heart" />
              </svg><span>Thêm vào danh sách yêu thích</span></a>
            @endif  
            <share-button class="share-button">
              <button class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="#icon_sharing" />
                </svg>
                <span>Chia sẻ</span>
              </button>
              <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                <div id="Article-share-template__main"
                  class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                  <div class="field grow mr-4">
                    <label class="field__label sr-only" for="url">Liên kết</label>
                    <input type="text" class="field__input w-full" id="url"
                      value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                      placeholder="Liên kết" onclick="this.select();" readonly="">
                  </div>
                  <button class="share-button__copy no-js-hidden">
                    <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13" fill="none"
                      xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                        fill="currentColor"></path>
                    </svg>
                    <span class="sr-only">Sao chép liên kết</span>
                  </button>
                </div>
              </details>
            </share-button>
            <script src="js/details-disclosure.html" defer="defer"></script>
            <script src="js/share.html" defer="defer"></script>
          </div>
          <div class="product-single__meta-info">
            <div class="meta-item">
              <label>Mã sản phẩm:</label>
              <span>{{$product->SKU}}</span>
            </div>
            <div class="meta-item">
              <label>Danh mục:</label>
              <span>{{$product->category->name}}</span>
            </div>
            <div class="meta-item">
              <label>Thẻ:</label>
              <span>NA</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product-single__details-tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link nav-link_underscore active" id="tab-description-tab" data-bs-toggle="tab"
              href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Mô tả</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link nav-link_underscore" id="tab-additional-info-tab" data-bs-toggle="tab"
              href="#tab-additional-info" role="tab" aria-controls="tab-additional-info"
              aria-selected="false">Thông tin thêm</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link nav-link_underscore" id="tab-reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
              role="tab" aria-controls="tab-reviews" aria-selected="false">Đánh giá (2)</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab-description" role="tabpanel"
            aria-labelledby="tab-description-tab">
            <div class="product-single__description">{{$product->description}}</div>
              </div>
              <h3 class="block-title mb-0">Lớp lót</h3>
              <p class="content">100% Polyester, Chính: 100% Polyester.</p>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-additional-info" role="tabpanel" aria-labelledby="tab-additional-info-tab">
            <div class="product-single__addtional-info">
              <div class="item">
                <label class="h6">Trọng lượng</label>
                <span>1.25 kg</span>
              </div>
              <div class="item">
                <label class="h6">Kích thước</label>
                <span>90 x 60 x 90 cm</span>
              </div>
              <div class="item">
                <label class="h6">Size</label>
                <span>XS, S, M, L, XL</span>
              </div>
              <div class="item">
                <label class="h6">Màu sắc</label>
                <span>Đen, Cam, Trắng</span>
              </div>
              <div class="item">
                <label class="h6">Bảo quản</label>
                <span>Áo sơ mi kiểu dáng rộng rãi</span>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews-tab">
            <h2 class="product-single__reviews-title">Đánh giá</h2>
            <div class="product-single__reviews-list">
              <div class="product-single__reviews-item">
                <div class="customer-avatar">
                  <img loading="lazy" src="assets/images/avatar.jpg" alt="" />
                </div>
                <div class="customer-review">
                  <div class="customer-name">
                    <h6>Janice Miller</h6>
                    <div class="reviews-group d-flex">
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                    </div>
                  </div>
                  <div class="review-date">06 tháng 4, 2023</div>
                  <div class="review-text">
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                      maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                  </div>
                </div>
              </div>
              <div class="product-single__reviews-item">
                <div class="customer-avatar">
                  <img loading="lazy" src="assets/images/avatar.jpg" alt="" />
                </div>
                <div class="customer-review">
                  <div class="customer-name">
                    <h6>Benjam Porter</h6>
                    <div class="reviews-group d-flex">
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                      <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_star" />
                      </svg>
                    </div>
                  </div>
                  <div class="review-date">06 tháng 4, 2023</div>
                  <div class="review-text">
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                      maxime placeat facere possimus, omnis voluptas assumenda est…</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-single__review-form">
              <form name="customer-review-form">
                <h5>Hãy là người đầu tiên đánh giá "{{$product->name}}"</h5>
                <p>Email của bạn sẽ không được công khai. Các trường bắt buộc được đánh dấu *</p>
                <div class="select-star-rating">
                  <label>Đánh giá của bạn *</label>
                  <span class="star-rating">
                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                    </svg>
                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                    </svg>
                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                    </svg>
                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                    </svg>
                    <svg class="star-rating__star-icon" width="12" height="12" fill="#ccc" viewBox="0 0 12 12"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M11.1429 5.04687C11.1429 4.84598 10.9286 4.76562 10.7679 4.73884L7.40625 4.25L5.89955 1.20312C5.83929 1.07589 5.72545 0.928571 5.57143 0.928571C5.41741 0.928571 5.30357 1.07589 5.2433 1.20312L3.73661 4.25L0.375 4.73884C0.207589 4.76562 0 4.84598 0 5.04687C0 5.16741 0.0870536 5.28125 0.167411 5.3683L2.60491 7.73884L2.02902 11.0871C2.02232 11.1339 2.01563 11.1741 2.01563 11.221C2.01563 11.3951 2.10268 11.5558 2.29688 11.5558C2.39063 11.5558 2.47768 11.5223 2.56473 11.4754L5.57143 9.89509L8.57813 11.4754C8.65848 11.5223 8.75223 11.5558 8.84598 11.5558C9.04018 11.5558 9.12054 11.3951 9.12054 11.221C9.12054 11.1741 9.12054 11.1339 9.11384 11.0871L8.53795 7.73884L10.9688 5.3683C11.0558 5.28125 11.1429 5.16741 11.1429 5.04687Z" />
                    </svg>
                  </span>
                  <input type="hidden" id="form-input-rating" value="" />
                </div>
                <div class="mb-4">
                  <textarea id="form-input-review" class="form-control form-control_gray" placeholder="Đánh giá của bạn"
                    cols="30" rows="8"></textarea>
                </div>
                <div class="form-label-fixed mb-4">
                  <label for="form-input-name" class="form-label">Tên *</label>
                  <input id="form-input-name" class="form-control form-control-md form-control_gray">
                </div>
                <div class="form-label-fixed mb-4">
                  <label for="form-input-email" class="form-label">Địa chỉ email *</label>
                  <input id="form-input-email" class="form-control form-control-md form-control_gray">
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="remember_checkbox">
                  <label class="form-check-label" for="remember_checkbox">
                    Lưu tên, email và trang web của tôi trong trình duyệt này cho lần bình luận tiếp theo.
                  </label>
                </div>
                <div class="form-action">
                  <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="products-carousel container">
      <h2 class="h3 text-uppercase mb-4 pb-xl-2 mb-xl-4">Sản phẩm <strong>Liên quan</strong></h2>

      <div id="related_products" class="position-relative you-may-like">
        <div class="swiper-container js-swiper-slider" data-settings='{
            "autoplay": false,
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#related_products .products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": "#related_products .products-carousel__next",
              "prevEl": "#related_products .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 4,
                "spaceBetween": 30
              }
            }
          }'>
          <div class="swiper-wrapper">
            @foreach ($related_products as $related_product)
            <div class="swiper-slide product-card">
              <div class="pc__img-wrapper">
                <a href="{{ route('shop.product.details', ['product_slug' => $related_product->slug]) }}">
                  <img loading="lazy" src="{{ asset('uploads/products')}}/{{ $related_product->image }}" width="330" height="400" alt="{{$related_product->name}}" class="pc__img">
                  @foreach (explode(',', $related_product->images) as $gimg)
                  <img loading="lazy" src="{{ asset('uploads/products')}}/{{ $gimg }}" width="330" height="400" alt="{{$related_product->name}}" class="pc__img pc__img-second">
                  @endforeach
                </a>
                @if (Cart::instance('cart')->content()->where('id', $related_product->id)->count() > 0)
                <a href="{{ route('cart.index') }}" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium btn-warning mb-3">Xem giỏ hàng</a>
                @else
                <form name="addtocart-form" method="post" action="{{ route('cart.add') }}">
                  @csrf
                  <input type="hidden" name="id" value="{{ $related_product->id }}">
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="name" value="{{ $related_product->name }}">
                  <input type="hidden" name="price" value="{{ $related_product->sale_price == '' ? $related_product->regular_price : $related_product->sale_price }}">
                <button type="submit" class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium" data-aside="cartDrawer" title="Thêm vào giỏ hàng">Thêm vào giỏ hàng</button>
                </form>
                @endif
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">{{$related_product->category->name}}</p>
                <h6 class="pc__title"><a href="{{ route('shop.product.details', ['product_slug' => $related_product->slug]) }}">{{$related_product->name}}</a></h6>
                <div class="product-card__price d-flex">
                  <span class="money price">
                    @if ($product->sale_price)
                      <s>{{ number_format($product->regular_price) }}đ</s> {{ number_format($related_product->sale_price) }}đ
                    @else
                      {{ number_format($product->regular_price) }}đ
                    @endif
                  </span>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                  title="Thêm vào danh sách yêu thích">
                  <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart" />
                  </svg>
                </button>
              </div>
            </div>
            @endforeach

          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->

        <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_prev_md" />
          </svg>
        </div><!-- /.products-carousel__prev -->
        <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
          <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
            <use href="#icon_next_md" />
          </svg>
        </div><!-- /.products-carousel__next -->

        <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
        <!-- /.products-pagination -->
      </div><!-- /.position-relative -->

    </section><!-- /.products-carousel container -->
  </main>

@endsection


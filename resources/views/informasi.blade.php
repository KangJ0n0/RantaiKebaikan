@extends('layouts.main')

@section('content')
<div class="max-w-screen-lg mx-auto px-2 py-4 space-y-8">
    <details
      class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
      open
    >
      <summary class="flex cursor-pointer items-center justify-between gap-1.5">
        <h2 class="text-lg font-medium text-gray-900">
            Apa itu RantaiKebaikan?
        </h2>
  
        <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5 shrink-0 transition duration-300 group-open:-rotate-45"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd"
            />
          </svg>
        </span>
      </summary>
  
      <p class="mt-4 leading-relaxed text-gray-700">
        RantaiKebaikan adalah platform crowdfunding yang menghubungkan individu yang peduli dengan lingkungan dengan proyek-proyek yang berdampak positif bagi alam. Kami menyediakan wadah bagi para inisiator proyek untuk mencari dana dan bagi donatur untuk berkontribusi dalam upaya pelestarian lingkungan.
      </p>
    </details>
  
    <details
      class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
    >
      <summary class="flex cursor-pointer items-center justify-between gap-1.5">
        <h2 class="text-lg font-medium text-gray-900">
            Apa tujuan dari RantaiKebaikan?
        </h2>
  
        <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5 shrink-0 transition duration-300 group-open:-rotate-45"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd"
            />
          </svg>
        </span>
      </summary>
  
      <p class="mt-4 leading-relaxed text-gray-700">
        Tujuan utama kami adalah memfasilitasi penggalangan dana untuk proyek-proyek lingkungan yang inovatif dan berkelanjutan. Kami ingin mendorong partisipasi masyarakat dalam upaya pelestarian alam dan menciptakan dampak sosial yang signifikan.
      </p>
    </details>

    <details
    class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
  >
    <summary class="flex cursor-pointer items-center justify-between gap-1.5">
      <h2 class="text-lg font-medium text-gray-900">
        Bagaimana cara mengajukan proyek di RantaiKebaikan?
      </h2>

      <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="size-5 shrink-0 transition duration-300 group-open:-rotate-45"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
            clip-rule="evenodd"
          />
        </svg>
      </span>
    </summary>

    <p class="mt-4 leading-relaxed text-gray-700">
        Anda dapat mengajukan proyek melalui formulir pengajuan yang tersedia di website kami. Isilah formulir dengan lengkap dan jelas, serta sertakan proposal proyek yang rinci.


    </p>
  </details>

  <details
  class="group border-s-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden"
>
  <summary class="flex cursor-pointer items-center justify-between gap-1.5">
    <h2 class="text-lg font-medium text-gray-900">
        Bagaimana cara berdonasi di RantaiKebaikan?
    </h2>

    <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="size-5 shrink-0 transition duration-300 group-open:-rotate-45"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
          clip-rule="evenodd"
        />
      </svg>
    </span>
  </summary>

  <p class="mt-4 leading-relaxed text-gray-700">
    Anda dapat berdonasi melalui berbagai metode pembayaran yang tersedia, seperti transfer bank, kartu kredit, atau dompet digital.




  </p>
</details>
</div>


@endsection
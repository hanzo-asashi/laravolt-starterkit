<!-- BEGIN: Todos -->
<li data-status="team" data-stared="false" data-complete="false"
    class="flex items-center px-6 space-x-4 py-6 hover:-translate-y-1 hover:shadow-todo transition-all duration-200 rtl:space-x-reverse">
    <input type="checkbox" class="table-checkbox" name="todo-checkbox">
    <div class="todo-fav">
        <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative ">
        </iconify-icon>
    </div>
    <span class="flex-1 text-sm text-slate-600 dark:text-slate-300 truncate bar-active transition-all duration-150">
      laboriosam mollitia et enim quasi adipisci quia provident illum
    </span>
    <div class="flex">
      <span class="flex-none space-x-2 text-base text-secondary-500 flex rtl:space-x-reverse">
        <div class="flex justify-start -space-x-1.5 min-w-[60px] rtl:space-x-reverse">
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-1.svg alt=Mahedi Amin class="w-full h-full rounded-full">
          </div>
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-2.svg alt=Sovo Haldar class="w-full h-full rounded-full">
          </div>
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-3.svg alt=Rakibul Islam class="w-full h-full rounded-full">
          </div>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-danger-500 text-danger-500  ">
            team
          </span>
        </div>
        <button type="button" class="text-slate-400" data-bs-toggle="modal" data-bs-target="#editTodoModal">
          <iconify-icon icon="heroicons-outline:pencil-alt">
          </iconify-icon>
        </button>
        <button type="button" class="transition duration-150 hover:text-danger-500 text-slate-400  delete-button">
          <iconify-icon icon="heroicons-outline:trash">
          </iconify-icon>
        </button>
      </span>
    </div>
</li>
<li data-status="stared,low" data-stared="true" data-complete="false"
    class="flex items-center px-6 space-x-4 py-6 hover:-translate-y-1 hover:shadow-todo transition-all duration-200 rtl:space-x-reverse">
    <input type="checkbox" class="table-checkbox" name="todo-checkbox">
    <div class="todo-fav">
        <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative ">
        </iconify-icon>
    </div>
    <span class="flex-1 text-sm text-slate-600 dark:text-slate-300 truncate bar-active transition-all duration-150">
      Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
    </span>
    <div class="flex">
      <span class="flex-none space-x-2 text-base text-secondary-500 flex rtl:space-x-reverse">
        <div class="flex justify-start -space-x-1.5 min-w-[60px] rtl:space-x-reverse">
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-2.svg alt=Rakibul Islam class="w-full h-full rounded-full">
          </div>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-success-500 text-success-500  ">
            low
          </span>
        </div>
        <button type="button" class="text-slate-400" data-bs-toggle="modal" data-bs-target="#editTodoModal">
          <iconify-icon icon="heroicons-outline:pencil-alt">
          </iconify-icon>
        </button>
        <button type="button" class="transition duration-150 hover:text-danger-500 text-slate-400  delete-button">
          <iconify-icon icon="heroicons-outline:trash">
          </iconify-icon>
        </button>
      </span>
    </div>
</li>
<li data-status="done,stared,medium,low" data-stared="true" data-complete="true"
    class="flex items-center px-6 space-x-4 py-6 hover:-translate-y-1 hover:shadow-todo transition-all duration-200 rtl:space-x-reverse">
    <input type="checkbox" class="table-checkbox" name="todo-checkbox">
    <div class="todo-fav">
        <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative ">
        </iconify-icon>
    </div>
    <span class="flex-1 text-sm text-slate-600 dark:text-slate-300 truncate bar-active transition-all duration-150">
      Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
    </span>
    <div class="flex">
      <span class="flex-none space-x-2 text-base text-secondary-500 flex rtl:space-x-reverse">
        <div class="flex justify-start -space-x-1.5 min-w-[60px] rtl:space-x-reverse">
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-1.svg alt=Sovo Haldar class="w-full h-full rounded-full">
          </div>
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-2.svg alt=Rakibul Islam class="w-full h-full rounded-full">
          </div>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-warning-500 text-warning-500  ">
            medium
          </span>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-success-500 text-success-500  ">
            low
          </span>
        </div>
        <button type="button" class="text-slate-400" data-bs-toggle="modal" data-bs-target="#editTodoModal">
          <iconify-icon icon="heroicons-outline:pencil-alt">
          </iconify-icon>
        </button>
        <button type="button" class="transition duration-150 hover:text-danger-500 text-slate-400  delete-button">
          <iconify-icon icon="heroicons-outline:trash">
          </iconify-icon>
        </button>
      </span>
    </div>
</li>
<li data-status="high,low" data-stared="false" data-complete="false"
    class="flex items-center px-6 space-x-4 py-6 hover:-translate-y-1 hover:shadow-todo transition-all duration-200 rtl:space-x-reverse">
    <input type="checkbox" class="table-checkbox" name="todo-checkbox">
    <div class="todo-fav">
        <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative ">
        </iconify-icon>
    </div>
    <span class="flex-1 text-sm text-slate-600 dark:text-slate-300 truncate bar-active transition-all duration-150">
      illo expedita consequatur quia in
    </span>
    <div class="flex">
      <span class="flex-none space-x-2 text-base text-secondary-500 flex rtl:space-x-reverse">
        <div class="flex justify-start -space-x-1.5 min-w-[60px] rtl:space-x-reverse">
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-3.svg alt=Mahedi Amin class="w-full h-full rounded-full">
          </div>
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-4.svg alt=Sovo Haldar class="w-full h-full rounded-full">
          </div>
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-1.svg alt=Rakibul Islam class="w-full h-full rounded-full">
          </div>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-primary-500
                       text-primary-500  ">
            high
          </span>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-success-500 text-success-500  ">
            low
          </span>
        </div>
        <button type="button" class="text-slate-400" data-bs-toggle="modal" data-bs-target="#editTodoModal">
          <iconify-icon icon="heroicons-outline:pencil-alt">
          </iconify-icon>
        </button>
        <button type="button" class="transition duration-150 hover:text-danger-500 text-slate-400  delete-button">
          <iconify-icon icon="heroicons-outline:trash">
          </iconify-icon>
        </button>
      </span>
    </div>
</li>
<li data-status="update" data-stared="false" data-complete="false"
    class="flex items-center px-6 space-x-4 py-6 hover:-translate-y-1 hover:shadow-todo transition-all duration-200 rtl:space-x-reverse">
    <input type="checkbox" class="table-checkbox" name="todo-checkbox">
    <div class="todo-fav">
        <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative ">
        </iconify-icon>
    </div>
    <span class="flex-1 text-sm text-slate-600 dark:text-slate-300 truncate bar-active transition-all duration-150">
      illo expedita consequatur quia in
    </span>
    <div class="flex">
      <span class="flex-none space-x-2 text-base text-secondary-500 flex rtl:space-x-reverse">
        <div class="flex justify-start -space-x-1.5 min-w-[60px] rtl:space-x-reverse">
          <div class=" h-6 w-6 rounded-full ring-1 ring-secondary-500 img-active transition-all duration-150">
            <img src=images/avatar/av-4.svg alt=Rakibul Islam class="w-full h-full rounded-full">
          </div>
        </div>
        <div>
          <span class=" bg-opacity-20 capitalize font-normal text-xs leading-4 px-[10px] py-[2px] rounded-full inline-block  bg-info-500 text-info-500  ">
            update
          </span>
        </div>
        <button type="button" class="text-slate-400" data-bs-toggle="modal" data-bs-target="#editTodoModal">
          <iconify-icon icon="heroicons-outline:pencil-alt">
          </iconify-icon>
        </button>
        <button type="button" class="transition duration-150 hover:text-danger-500 text-slate-400  delete-button">
          <iconify-icon icon="heroicons-outline:trash">
          </iconify-icon>
        </button>
      </span>
    </div>
</li>

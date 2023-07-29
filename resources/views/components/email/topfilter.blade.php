<li class="active email-categorie-list" data-status="all">
    <label>
        <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
            <span class="text-xl leading-[1]">
                <iconify-icon icon="uil:image-v"></iconify-icon>
            </span>
            <span class="capitalize text-sm">
                {{ __('Inbox') }}
            </span>
        </span>
    </label>
</li>

<li class="email-categorie-list" data-status="stared">
    <label>
        <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
            <span class="text-xl">
                <iconify-icon icon=heroicons:star></iconify-icon>
            </span>
            <span class="capitalize text-sm">
                {{ __('Stared') }}
            </span>
        </span>
    </label>
</li>

<li class="email-categorie-list" data-status="sent">
    <label>
        <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
            <span class="text-xl">
                <iconify-icon icon=heroicons-outline:paper-airplane></iconify-icon>
            </span>
            <span class="capitalize text-sm">
                {{ __('Sent') }}
            </span>
        </span>
    </label>
</li>

<li class="email-categorie-list" data-status="drafts">
    <label>
        <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
            <span class="text-xl">
                <iconify-icon icon=heroicons-outline:pencil-alt></iconify-icon>
            </span>
            <span class="capitalize text-sm">
                {{ __('Drafts') }}
            </span>
        </span>
    </label>
</li>

<li class="email-categorie-list" data-status="spam">
    <label>
        <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
            <span class="text-xl">
                <iconify-icon icon=heroicons:information-circle></iconify-icon>
            </span>
            <span class="capitalize text-sm">
                {{ __('Spam') }}
            </span>
        </span>
    </label>
</li>

<li class="email-categorie-list" data-status="trash">
    <label>
        <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
            <span class="text-xl">
                <iconify-icon icon=heroicons:trash></iconify-icon>
            </span>
            <span class="capitalize text-sm">
                {{ __('Trash') }}
            </span>
        </span>
    </label>
</li>

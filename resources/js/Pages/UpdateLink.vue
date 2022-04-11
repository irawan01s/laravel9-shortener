<template>
  <Head title="Update Link" />
  <div class="max-w-7xl m-auto mt-10">
    <form @submit.prevent="form.put(`/shorten/${link.id}`)">
      <div class="form-control w-full max-w-xs">
        <label class="label">
          <span class="label-text">Link</span>
        </label>
        <input
          type="text"
          name="link"
          v-model="form.link"
          placeholder="Type here your link"
          class="input input-bordered w-full max-w-sm"
        />
      </div>

      <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
  </div>
</template>

<script setup>
import { useForm, Head } from "@inertiajs/inertia-vue3";

const props = defineProps({
  link: Object,
});

const form = useForm({
  link: props.link.url,
});
</script>
<template>
  <Head title="Add Link" />
  <div class="max-w-7xl m-auto mt-10">
    <form @submit.prevent="form.post('/shorten')" method="post">
      <div class="form-control w-full max-w-xs">
        <label class="label">
          <span class="label-text">Link</span>
        </label>
        <input
          type="text"
          name="link"
          v-model="form.link"
          placeholder="Type here your link"
          class="input input-md input-bordered w-full max-w-md"
        />
        <span class="text-error" v-if="$page.props.errors.link">{{ $page.props.errors.link }}</span>
      </div>

      <button type="submit" class="btn btn-success mt-2">Save</button>
    </form>
  </div>
</template>

<script setup>
import { useForm, Head } from "@inertiajs/inertia-vue3";

const form = useForm({
  link: "",
});
</script>
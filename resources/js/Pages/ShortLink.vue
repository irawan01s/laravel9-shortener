<script setup>
import { Link, Head } from '@inertiajs/inertia-vue3';
defineProps({
  shortLinks: Object,
});
</script>

<template>
  <Head title="List Link" />
  <div class="max-w-7xl m-auto mt-10">
    <div class="overflow-x-auto">
      <Link :href="route('shorten.create')" class="btn btn-sm btn-primary mb-2">Add</Link>
      <table class="table table-zebra w-full">
        <!-- head -->
        <thead>
          <tr>
            <th></th>
            <th>Short Link</th>
            <th>Link</th>
            <th align="center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="link in shortLinks" :key="link.id">
            <td>{{ link.id }}</td>
            <td>
              <Link :href="route('shorten.stats', link.shortcode)" class="link link-accent link-hover">{{ link.shortcode }}</Link>
            </td>
            <td>{{ link.url }}</td>
            <td>
              <div class="flex justify-center">
                <Link :href="route('shorten.edit', link.id)" class="btn btn-sm btn-warning ml-2">Edit</Link>
                <Link :href="route('shorten.destroy', link.id)" method="delete" class="btn btn-sm btn-error ml-2">Delete</Link>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

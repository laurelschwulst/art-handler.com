<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  author:
    label: Author
    type:  author
  date:
    label: Date
    type:  text
    help: Date format MM/DD/YYYY
  issue:
    label: Issue
    type: radio
    options:
      1: No. 1
    columns: 3
  type:
    label: Type
    type: radio
    options:
      article: Article
      photo essay: Photo Essay
      project: Project
    columns: 3
  featured:
    label: Feature
    type: checkbox
    text: Featured
  postimage:
    label:  Square Thumbnail Image
    type:   selector
    mode:   single
    filter: cover
    types:
        - image
  coverimage:
    label:  Cover Image
    type:   selector
    mode:   single
    filter: cover
    types:
        - image
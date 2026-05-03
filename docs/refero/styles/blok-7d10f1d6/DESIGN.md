# Blok — Refero Style

- Refero URL: https://styles.refero.design/style/7d10f1d6-f2a8-43ce-b055-6ddd74e3c7e1
- Site URL: https://blokwatches.com
- ID: 7d10f1d6-f2a8-43ce-b055-6ddd74e3c7e1
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:02:34.771Z
- Ranks: newest: 460, popular: 1125, trending: 1077

> energetic timepiece on a clean canvas

## Description

Blok's design system uses a bright, energetic palette grounded in high-contrast monochromes. A vivid teal accent color provides functional punctuation for primary actions, while secondary interaction is highlighted with a striking blue. Typography is confident and direct, predominantly sans-serif, establishing clear hierarchy. Components are lightweight with minimal use of shadows, favoring crisp borders and rounded edges for interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0a0d0f | neutral | Primary text, deep section backgrounds, primary borders |
| Canvas White | #ffffff | neutral | Page backgrounds, surface fills, inverse text on dark backgrounds |
| Charcoal Haze | #2e3438 | neutral | Secondary text, subtle borders, muted icons, footer text |
| Pure Black | #000000 | neutral | High-contrast text, strong borders |
| Whisper Gray | #f7f7f7 | neutral | Subtle background accents, secondary section backgrounds |
| Footer Gray | #efefef | neutral | Footer background |
| Border Ash | #d5d6d7 | neutral | Input borders, subtle dividers |
| Muted Stone | #656565 | neutral | Badge text, muted informational text |
| Aqua Thrill | #1dd8e1 | brand | Primary action buttons, interactive highlights, brand accent color |
| Electric Blue | #2c75d4 | brand | Secondary brand accent, distinctive component backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Poppins | system-ui | 400, 500 | 14px, 16px, 17px, 21px, 24px, 25px | 1.38, 1.42, 1.50 | General body text, links, and various UI elements. Poppins at 17px weight 400 with a line height of 1.5 offers clear readability for longer passages. |
| Cabin | sans-serif | 500, 600 | 12px, 14px, 17px, 20px, 21px, 68px | 1.00, 1.20, 1.25, 1.50, 1.63 | Used for headings and prominent labels, Cabin provides a confident, slightly condensed feel with distinct letter spacing for emphasis, especially at larger sizes like 68px. |
| Jost | sans-serif | 700 | 23px, 34px, 42px, 51px | 1.25, 1.37, 1.38 | Employed for impactful headlines, Jost at weight 700 with wide letter spacing creates a strong, editorial presence, making headings visually distinctive. |
| GTStandard-M | sans-serif | 400 | 17px | 1.50 | A subtle brand-specific font used for a niche set of page elements, maintaining legibility at a standard body text size. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.09 |
| body-sm | 14 | 1.38 |  |
| body-lg | 17 | 1.5 |  |
| subheading | 20 | 1.25 | 0.09 |
| heading | 24 | 1.25 |  |
| heading-lg | 42 | 1.37 | 0.09 |
| display | 68 | 1 | 0.09 |

## Spacing & Shape

```json
{
  "radius": {
    "input": "3px",
    "buttons": "100px",
    "default": "3px"
  },
  "elementGap": "10px",
  "sectionGap": "50px",
  "cardPadding": "12px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Solid Aqua Button

**Role:** Primary Call to Action

Filled button with 'Aqua Thrill' background and 'Midnight Ink' text. Uses a 0px border-radius and generous horizontal padding, 12px vertical and 24px horizontal, for prominent action.

### Pill Ghost Button

**Role:** Secondary action/Filter

Ghost button with transparent background, 'Midnight Ink' text and border. Features a 100px border-radius creating a pill shape, with 6px vertical and 16px horizontal padding. Found for filters or secondary navigation.

### Text Link Button

**Role:** Minimal action

A button styled as a text link, transparent background, 'Charcoal Haze' text and bottom border. No border-radius, with 0px horizontal padding and 0px top padding but 10px bottom padding. Used for discreet actions within text.

### Circular Pagination Button

**Role:** Navigation Control

A circular button with 'Charcoal Haze' background at 5% opacity and 'Midnight Ink' text. Uses a 50% border-radius to create a perfect circle. Zero padding to maintain compact size.

### Block Input Field

**Role:** Text Input

Transparent background input field with 'Midnight Ink' text. Features a 'Border Ash' bottom border and a 0px border-radius. Padding is 11px vertical and 30px horizontal, with 11px bottom margin.

### White Border Input Field

**Role:** Text Input (Alternative)

Transparent background input field with 'Canvas White' text and a 'Canvas White' border, with a 3px border-radius. Features 8px vertical and 10px right padding with 0px left padding. Used against darker backgrounds.

### Simple Badge

**Role:** Informational Status

Transparent background with 'Midnight Ink' text, 0px border-radius and no padding. Used for minimal status indicators.

### Outline Status Badge

**Role:** Informational Status

White background with 'Muted Stone' text and border. Features 0px border-radius and 5px vertical / 10px horizontal padding. Typically used for 'Sold Out' indicators.

## Do's

- Prioritize 'Midnight Ink' (#0a0d0f) for primary text and 'Canvas White' (#ffffff) for page backgrounds.
- Use 'Aqua Thrill' (#1dd8e1) exclusively for primary call-to-action buttons and prominent interactive elements.
- Apply a 100px border-radius for all pill-shaped buttons and tags to maintain a consistent interactive element style.
- Ensure all headings use a wide letter spacing of 0.0900em as defined in the Cabin and Jost typography tokens.
- Maintain a clear vertical rhythm between sections using a 'sectionGap' of '50px'.
- Use Cabin (500, 600) or Jost (700) for all headings to create distinct visual hierarchy.
- Apply 'Border Ash' (#d5d6d7) for input field outlines and subtle dividers.

## Don'ts

- Do not use saturated colors other than 'Aqua Thrill' (#1dd8e1) and 'Electric Blue' (#2c75d4) for interactive elements.
- Avoid deep shadows or overly dimensional effects on components; prefer crisp borders and flat surfaces.
- Do not deviate from the specified letter spacing values for headings; consistent tracking is key to brand typography.
- Do not use 'Pure Black' (#000000) for general body text; reserve it for high-contrast headings or specific elements.
- Avoid non-standard border-radii for primary buttons; stick to 0px for solid actions and 100px for pill-shaped secondary actions.
- Do not introduce new typefaces; adhere strictly to Poppins, Cabin, Jost, and GTStandard-M.
- Do not use 'Charcoal Haze' (#2e3438) for large headlines; it is reserved for secondary text and muted elements.

## Layout

The page primarily uses a max-width contained model at 1200px, creating defined content areas. The hero section is a full-bleed visual experience with a dominant product image and centered textual call-to-action. Subsequent sections often feature a stacked, centered content arrangement (headline, subtext) followed by a grid of product cards. Vertical rhythm is established through consistent section gaps, with clear separation between content blocks. Navigation is a minimal top bar with discreet icons for menu and cart.

## Imagery

The visual language for imagery focuses on high-quality product photography. Watches are presented as hero objects, often in clean, full-bleed compositions against a dark, atmospheric background (as seen in the first hero). Product shots are contained within neutral frames with crisp edges when displayed in grids, emphasizing the product itself. The site employs an 'icons-only' approach for certain UI elements like navigation for a minimalist feel. Imagery density is moderate, balancing product showcases with textual information.

## Similar Brands

| Business | Why |
| --- | --- |
| Filippo Loreti | Uses monochrome base with a single pop of color for accents, clean product photography on dark backgrounds, and subtle typography. |
| MVMT Watches | Similar strong product-focused imagery, high-contrast layouts, and a minimalist design aesthetic for e-commerce. |
| Shore Projects | Employs clean typography, a spacious layout, and a focus on product visuals over busy interface elements. |
| Daniel Wellington | Relies on a streamlined, elegant visual style with primary focus on product presentation against white or minimalist backdrops. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0a0d0f
background: #ffffff
border: #0a0d0f
accent: #2c75d4
primary action: #1dd8e1 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #1dd8e1 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a product name and price card: 'Canvas White' (#ffffff) background, product name in 'Midnight Ink' (#0a0d0f) (Poppins, weight 500, 17px), price in 'Midnight Ink' (#0a0d0f) (Poppins, weight 400, 17px), 3px border-radius, with 12px padding.
3. Create a secondary filter button: transparent background, 'Midnight Ink' (#0a0d0f) text (Cabin, weight 500, 14px), 'Midnight Ink' (#0a0d0f) 1px border, 100px border-radius, 6px vertical and 16px horizontal padding.
4. Create a prominent headline: 'Pure Black' (#000000), font Cabin, weight 600, 68px size, 1.0 lineHeight, 0.0900em letterSpacing.
5. Create an input field: transparent background, 'Midnight Ink' (#0a0d0f) text (Poppins, weight 400, 17px), 'Border Ash' (#d5d6d7) 1px bottom border, 3px border-radius, 11px vertical and 30px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514531678-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514531678-thumb.jpg |

# VISIONNAIRE — Refero Style

- Refero URL: https://styles.refero.design/style/0ecfea58-c1f3-4671-806d-5ae0eb779f38
- Site URL: https://vision-naire.com
- ID: 0ecfea58-c1f3-4671-806d-5ae0eb779f38
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:12:07.319Z
- Ranks: newest: 209, popular: 1157, trending: 1102

> Raw monochrome canvas.

## Description

The VISIONNAIRE design system embraces a raw, minimalist aesthetic with a street-wear edge. It features stark black-and-white UI elements on a primarily white canvas, punctuated by a unique, muted sandy-beige for specific content sections and occasional product photography. Typography is compact and precise, often used in all-caps, defining a tight information architecture. Interactive elements are primarily ghost buttons or unstyled links, maintaining a flat, unornamented surface treatment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, icon fill, borders, active element accents, and footer background. It provides stark contrast and defines the outlines of the UI |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, and navigation elements. It offers a clean, expansive canvas |
| Ghost Gray | #888888 | neutral | Muted text, subtle borders for ghost buttons, and secondary icon fills. It introduces a softer level of contrast |
| Sand Dune | #f7f5e8 | neutral | Key content section backgrounds, providing a warm, subtle shift for promotional or featured areas without introducing saturation |
| Sky Blue | #DAEDFF | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |
| Bubblegum Pink | #FF92C4 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |
| Goldenrod | #FFE36C | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PP Neue Montreal | Inter | 500, 700 | 8px, 10px, 11px, 12px, 14px, 15px, 18px, 21px, 24px, 30px, 33px, 45px | 1.15, 1.20, 1.30, 1.50, 2.00, 2.78 | The sole typeface for all content, from headings to body text and navigation. Its condensed, modern, sans-serif character supports a compact and precise textual presentation, especially at the lighter weights for larger text and tighter tracking for small, all-caps elements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| heading-sm | 18 | 1.2 | 0.033 |
| heading | 24 | 1.2 | 0.029 |
| heading-lg | 33 | 1.15 | 0.021 |
| display | 45 | 1.15 | 0.016 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "15px",
    "links": "50px",
    "images": "15px",
    "buttons": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "30px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Primary Button

**Role:** Navigational and call-to-action elements.

Transparent background, Midnight Ink (#000000) text and 1px border. No border-radius. Padding of 20px on all sides. Text is PP Neue Montreal, typically uppercase.

### Muted Ghost Button

**Role:** Secondary and less prominent actions.

Transparent background, Ghost Gray (#888888) text and 1px border. No border-radius. No padding is explicitly defined; adapts to content. Used for minimal interactive elements like 'Valider' in forms.

### Product Card

**Role:** Display individual product listings in grid layouts.

Transparent background, no border, no shadow, no border-radius defined at the card wrapper level but content within might have 15px radius images. Padding is non-existent, implying images fill the card up to the edge. Product information is tightly integrated below the image.

### Newsletter Signup Overlay

**Role:** Capturing user emails with a distinct pop-up.

Paper White (#ffffff) background, with a 15px top-left/top-right border radius and 0px for bottom corners. No shadow. Input fields are transparent with a Midnight Ink (#000000) bottom border.

### Text Input Minimal

**Role:** User input fields.

Transparent background with Midnight Ink (#000000) 1px bottom border. No border-radius. Padding of 0px top/right/left, 5px bottom.

## Do's

- Use Midnight Ink (#000000) for all primary text, borders, and icons to maintain high contrast with Paper White (#ffffff) backgrounds.
- Prioritize ghost button styles for interactive elements, employing Midnight Ink (#000000) or Ghost Gray (#888888) for borders and text, with 0px border-radius.
- Apply PP Neue Montreal as the exclusive font family across all typographic elements, leveraging its different weights for hierarchy rather than different fonts.
- Employ the Sand Dune (#f7f5e8) color for distinct content sections to subtly break the monochromatic flow without introducing strong chromatic elements.
- Maintain a compact information density with small element gaps (4px) and relatively small section gaps (30px).
- Use 15px border-radius sparingly for cards or images, and 50px for certain link elements, otherwise default to 0px for sharp edges.

## Don'ts

- Avoid visible shadows for elevation; rely on color changes or borders to differentiate elements.
- Do not introduce highly saturated colors for general UI elements; these are reserved for decorative accents or specific product imagery.
- Refrain from using varied font families or decorative typefaces; maintain a consistent, singular font for brand identity.
- Do not use large, expansive whitespace between content elements; keep layouts dense and to the point.
- Avoid generous padding on cards or primary content blocks; content should appear close to edges.
- Do not use rounded corners universally; apply 0px radius unless specifically designated for cards or certain links.

## Layout

The page uses a maximum content width for key sections but allows for full-bleed elements, such as headers or specific section backgrounds. The hero section often features a split layout with imagery on one side and a brand statement on a colored background (Sand Dune) on the other. Product listings are presented in responsive grid formations, often 2-5 columns, with consistent vertical spacing between items. Navigation is a fixed top bar on larger screens, compacting on smaller views. Sections are primarily divided by changes in background color (Paper White, Sand Dune) or implied by distinct content blocks. Overall density is compact, with element and section gaps creating a rhythmic flow rather than vast whitespace.

## Imagery

This site features product-focused imagery, primarily fashion photography showing models wearing the apparel. Photos are generally high-key with strong contrast, often against studio white or minimalist settings. There are occasional lifestyle shots and abstract branding elements, such as the 'VISIONNAIRE Dahran ART CLUB' graphic. Imagery is typically contained within cards (sometimes with 15px corner radii) or presented full-bleed in hero sections, not overlapping. Icons are minimalist, outlined, and monochromatic (Midnight Ink). Visuals serve primarily to showcase products and establish brand atmosphere.

## Similar Brands

| Business | Why |
| --- | --- |
| Aesthetic | Monochromatic interface with minimal styling, relying on sharp contrasts and ghost components. |
| Palace Skateboards | Streetwear brand with a focus on product presentation, minimalist navigation, and bold, often all-caps typography. |
| Kith | Visual identity built around high-quality product photography and a clean, direct e-commerce experience without excessive embellishment. |
| Bodega | Combines a stark brand aesthetic with detailed product display, often using a limited color palette and prominent typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #DAEDFF
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header: Paper White background. Navigation links in PP Neue Montreal size 14px weight 500, Midnight Ink (#000000), letter-spacing 0.047em, all-caps. Shopping cart icon in Midnight Ink (#000000).
2. Create a product card: Transparent background. Image at 15px border-radius. Product name (PP Neue Montreal size 14px weight 500, Midnight Ink #000000, letter-spacing 0.047em) and price (PP Neue Montreal size 12px weight 500, Midnight Ink #000000, letter-spacing 0.05em) stacked directly below the image, with 4px elementGap between text lines.
3. Create a ghost button: Transparent background, Midnight Ink (#000000) 1px border. Text in PP Neue Montreal size 12px weight 500, Midnight Ink (#000000), letter-spacing 0.05em, all-caps. Padding 20px horizontally and vertically. No border-radius.
4. Create a newsletter signup form: Sand Dune (#f7f5e8) background. Headline 'VISIONNAIRE CLUB' in PP Neue Montreal size 18px weight 700, Midnight Ink (#000000), letter-spacing 0.033em. Input field is transparent with a 1px bottom border in Midnight Ink (#000000), padding 5px solely from the bottom. 'Valider' button is a Muted Ghost Button.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518704553-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518704553-thumb.jpg |

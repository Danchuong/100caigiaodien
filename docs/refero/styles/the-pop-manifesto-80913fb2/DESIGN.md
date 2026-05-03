# The Pop Manifesto — Refero Style

- Refero URL: https://styles.refero.design/style/80913fb2-60ee-4d6c-b2c8-17600351096a
- Site URL: https://thepopmanifesto.com
- ID: 80913fb2-60ee-4d6c-b2c8-17600351096a
- Theme: dark
- Industry: media
- Created: 2026-04-30T02:30:25.125Z
- Ranks: newest: 358, popular: 1226, trending: 1187

> digital zine, high contrast

## Description

The Pop Manifesto's visual language is a bold, high-contrast digital zine. It features stark black typography against vibrant, saturated backgrounds, often utilizing a single dominant color per section. The typography leans into a strong, editorial aesthetic with precise tracking and a clear hierarchy. Components are minimal, relying on color blocking and crisp text to define interactions rather than subtle shadows or rounded forms.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Neon Pink | #ff29f1 | brand | Primary background for various sections, providing a high-energy stage for content |
| Electric Blue | #287aea | brand | Alternate background color, creating distinct content blocks and providing visual interest |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roobert | Inter | 400 | 12px, 15px, 22px, 33px | 0.70, 1.20 | Body text, navigation, and subheadings; its geometric, sharp quality contributes to the editorial feel. |
| Roobert Bold | Inter Bold | 400 | 15px | 1.20 | Small headings and emphasis; provides a more opinionated version of the primary typeface without increasing visual weight with a heavier font weight. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 15 | 1.2 |  |
| body | 22 | 1.2 |  |
| body-lg | 33 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "",
  "cardPadding": "25px",
  "pageMaxWidth": null
}
```

## Components

### Section Headline

**Role:** Main content headings for distinct page sections.

Text uses Roobert at 33px, weight 400, color Midnight Ink (#000000), line height 0.70.

### Navigation Link

**Role:** Top-level navigation items.

Text uses Roobert at 15px, weight 400, color Midnight Ink (#000000), line height 1.20. No distinct background or border.

### Image Card

**Role:** Displays photographic content with prominent captions.

An image with no border-radius, followed by Roobert text at 15px, color Midnight Ink (#000000) for caption, and 25px top/bottom padding.

### Interactive Link Block

**Role:** Clickable blocks usually containing descriptive text.

Background is highly saturated (e.g., Neon Pink #ff29f1 or Electric Blue #287aea), text uses Roobert at 15px or 22px, weight 400, color Midnight Ink (#000000), with 25px top/bottom padding.

### Sub-Navigation Link

**Role:** Secondary navigation or category links.

Text uses Roobert at 12px, weight 400, color Midnight Ink (#000000), line height 1.20, with 5px left padding and 9px top padding.

## Do's

- Use Midnight Ink (#000000) for all text and interactive borders to ensure maximum contrast.
- Implement Roobert 400 as the sole typeface, varying size and line height for hierarchy.
- Employ highly saturated, single-color backgrounds like Neon Pink (#ff29f1) or Electric Blue (#287aea) for distinct content blocks, ensuring visual separation.
- Maintain hard, 0px border-radius for all elements, including images and interactive areas.
- Utilize 291px for vertical section gaps to create generous negative space and a spacious feel.
- Apply 20px as the standard horizontal and vertical gap between related elements.
- Assume all interactivity is communicated through text link styles or color block background changes, not subtle hover states or shadows.

## Don'ts

- Do not use subtle background gradients or textures; stick to flat, vibrant color blocks.
- Avoid softer, desaturated or pastel colors, which would dilute the high-contrast aesthetic.
- Do not introduce rounded corners; all shapes should be sharp 0px radius to preserve the crisp, editorial look.
- Refrain from using drop shadows or complex elevation schemes; rely on color blocking for visual hierarchy.
- Do not use varied typography weights; Roobert 400 is the only weight. Change text size and line height for hierarchy.
- Do not use excessive white space within content blocks; reserve large spacing values for section separation only.
- Do not introduce decorative icons unless they are bold, single-color, and contribute explicitly to the high-contrast identity.

## Layout

The page uses a full-bleed layout, where content sections stretch the full viewport width. The hero section features a prominent, centered headline over a vibrant background. Content frequently uses a multi-column grid, prominently a 3-column layout for images and associated text. Sections are separated by large vertical gaps (291px) and distinct, solid color changes, creating a strong, block-like rhythm. Navigation is minimal, likely a fixed top bar or simple links within the header and footer.

## Imagery

This site features a mix of photography styles: studio portraits with bold, single-color backdrops (like electric blue), candid lifestyle shots, and black-and-white portraits. Images are mostly contained within rectangular frames, with sharp edges, functioning as content rather than decorative backgrounds. They are high-density, taking up significant visual space to act as focal points.

## Similar Brands

| Business | Why |
| --- | --- |
| 032c | High-contrast, bold typography against stark, often single-color backgrounds, resembling an editorial layout. |
| Paper Magazine | Editorial aesthetic with a focus on strong visual hierarchy and unconventional use of color blocking for content sections. |
| Dazed Digital | Full-bleed imagery, strong typographic statements, and a high-fashion, art-oriented visual approach with maximal contrast. |
| SSENSE | Emphasis on product photography and a clean, direct editorial style that uses typography to create impact. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ff29f1
border: #000000
accent: #287aea
primary action: no distinct CTA color

Example Component Prompts:
Create a hero section with a Neon Pink background, a main headline 'THE POP MANIFESTO' in Midnight Ink, Roobert 33px weight 400, line height 0.70. Below it, a sub-navigation link 'SHOP' in Midnight Ink, Roobert 15px weight 400, line height 1.20.
Create a content block with an Electric Blue background, featuring three image cards laid out horizontally. Each card has a full-bleed image and a caption 'Interview' in Midnight Ink, Roobert 15px, weight 400, with 25px padding above and below.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516207642-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516207642-thumb.jpg |

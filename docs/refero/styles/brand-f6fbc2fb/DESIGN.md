# Brand — Refero Style

- Refero URL: https://styles.refero.design/style/f6fbc2fb-ea5d-44cc-a37d-d7896005acbd
- Site URL: https://brand.dropbox.com
- ID: f6fbc2fb-ea5d-44cc-a37d-d7896005acbd
- Theme: light
- Industry: design
- Created: 2026-04-30T00:26:01.439Z
- Ranks: newest: 802, popular: 1139, trending: 1143

> Shifting color block canvas

## Description

Dropbox's brand guidelines site employs a playful, almost kaleidoscopic visual system built on a vibrant and highly chromatic color palette. The layout uses a grid-based approach with large, color-blocked sections that shift dynamically, giving a sense of movement and modularity. Typography is clean and modern, providing clear information against the lively backgrounds. The design prioritizes distinctive branding through color and flexible, responsive layout rather than heavy shadows or complex gradients.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, main content surfaces, base of interactive elements |
| Primary Text | #1e1919 | neutral | Primary content text, headings, and significant labels. Offers high contrast on white |
| Subtle Text | #736c64 | neutral | Secondary text, muted labels, and borders where a softer contrast is desired |
| Ocean Blue | #0061fe | brand | Brand accent color, used for primary interactive elements, links, icons, and outlines on ghost buttons. Conveys action and brand identity |
| Sky Blue | #5f9dff | brand | Softer accent blue, used for background fills and borders, often combined with Ocean Blue for depth |
| Coral Red | #ffafa5 | accent | Vibrant accent color for differentiating navigation sections and large background blocks |
| Spice Orange | #6d2e09 | accent | Deep, warm accent color for navigation elements and thematic content blocks |
| Teal Ink | #055463 | accent | Muted, cool accent color for navigational elements and content differentiation |
| Goldenrod | #684505 | accent | Warm, earthy accent color for navigation categories and distinct content area backgrounds |
| Indigo Magenta | #682760 | accent | Rich, purple-pink accent for distinguishing navigation, active states, and content sections |
| Powder Blue | #b4c8e1 | accent | Light, subtle blue used for navigation borders and backgrounds, providing a soft contrast |
| Crimson Mocha | #4e0119 | accent | Deep, intense red-brown for navigation elements and specific content highlighting |
| Forest Green | #175641 | accent | Muted, dark green for navigation accents and thematic content blocks |
| Canary Yellow | #fad24b | accent | Bright, vivid yellow for dynamic background blocks and highlights |
| Deep Plum | #892055 | accent | Vivid deep pink for background blocks, indicating a distinct content zone |
| Aqua Glow | #3dd3ee | accent | Bright, vivid cyan-blue for background blocks, adding visual pop |
| Papaya Orange | #ff8c19 | accent | Vivid orange for background blocks and prominent color accents |
| Misty Violet | #c8aff0 | accent | Moderate violet for background blocks, contributing to the varied color palette |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Atlasgrotesk Web | Inter | 400, 500 | 12px, 14px | 1.43, 1.57, 1.67 | Body text, links, navigation labels, and UI controls. Its clear, sans-serif design maintains legibility across various small to medium text elements. |
| Dbsharpgroteskvariable Vf | Inter | 500, 700 | 30px, 34px, 36px | 0.80, 1.20 | Headings and prominent navigation titles. This variable font's tight tracking creates a contemporary, condensed appearance, making titles assertive without being bulky. Its high visual weight provides strong hierarchy against the colorful backgrounds. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.57 |  |
| body | 14 | 1.67 |  |
| subheading | 30 | 0.8 | -0.6 |
| heading | 34 | 1.2 | -0.68 |
| heading-lg | 36 | 1.2 | -0.72 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "48px",
  "cardPadding": "23px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Primary Button

**Role:** Outline button for primary actions

Text in Ocean Blue (#0061fe), with a 2px Ocean Blue (#0061fe) border. Background is Canvas White (#ffffff). Radius is 0px, indicating sharp corners. Used for primary calls to action like 'Brand Partner Toolkit'.

## Do's

- Prioritize vibrant, saturated color blocks, drawing from the accent color palette to define distinct sections.
- Utilize Atlasgrotesk Web (or Inter) for all body copy and UI elements with a default of weight 400 and Canvas White (#ffffff) text on dark backgrounds, or Primary Text (#1e1919) on light.
- Apply Dbsharpgroteskvariable Vf (or Inter) at weights 500 or 700 for all headlines, maintaining the tight letter-spacing of -0.0200em.
- Employ Ocean Blue (#0061fe) as the primary indicator for interactive elements, including links and outlined buttons.
- Use a base radius of 0px for all buttons and interactive elements, favoring sharp, angular shapes over rounded corners.
- Implement the detected spacing tokens (e.g., 23px padding for content blocks, 16px element gaps) for consistent rhythm.
- When creating interactive elements, use distinct color accents (#0061fe, #5f9dff) as borders or text colors to indicate interactivity, avoiding solid fills for primary actions.

## Don'ts

- Avoid using drop shadows or complex elevation effects; the design relies on color and sharp edges for visual hierarchy.
- Do not introduce gradients unless they are simple color-to-color transitions that mimic the color-block aesthetic.
- Do not use highly rounded corners (e.g., >8px) for buttons or primary components, as the system favors sharp, defined shapes.
- Refrain from using generic gray scales for backgrounds; instead, use the vibrant accent colors to define distinct content areas.
- Do not deviate from the specified font families or their respective letter-spacing values, as these are critical to brand identity.
- Avoid overly dense layouts; maintain a comfortable density with ample padding and element gaps, consistent with the base unit of 4px.
- Do not use dark backgrounds for significant body text; ensure high contrast with light background colors like Canvas White (#ffffff).

## Layout

The page structure is dominated by a flexible, full-bleed grid layout where content sections are defined by large, shifting color blocks. There is no fixed pageMaxWidth, allowing sections to extend to the full viewport width. The hero section often features a centered headline or impactful text over a background color block. Content is arranged across these dynamic blocks, often centered within them when text-heavy. Navigation appears to be a sticky top bar or an aside that floats, adapting to the grid. Section rhythm is driven by the alternating and sometimes overlapping nature of the color blocks, creating a dynamic, non-linear flow. Density is kept comfortable, with significant white space (or colored space) around content blocks.

## Imagery

This design system uses a minimal, largely UI-focused imagery approach. The primary visual elements are the color blocks themselves, forming a dynamic grid system. Icons, like the Dropbox logo, are crisp, filled, and monochromatic (using Ocean Blue or Canvas White), serving as functional brand markers. Photography, illustrations, or product screenshots are not a dominant feature of this system; the visual language is created through color, typography, and clean arrangement of interface elements. Imagery, if present, is expected to be simple, abstract, or purely functional within the color-block context.

## Custom Sections

### Agent Prompt Guide

primary action: #0061fe (outlined action border)
Create an Outlined Primary Action: Transparent background, #0061fe border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508739299-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508739299-thumb.jpg |

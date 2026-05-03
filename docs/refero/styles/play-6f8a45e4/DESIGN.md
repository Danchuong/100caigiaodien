# Play — Refero Style

- Refero URL: https://styles.refero.design/style/6f8a45e4-d1a4-4b6d-b857-a4dc70dd1b52
- Site URL: https://play.studio
- ID: 6f8a45e4-d1a4-4b6d-b857-a4dc70dd1b52
- Theme: light
- Industry: design
- Created: 2026-04-30T03:49:43.250Z
- Ranks: newest: 52, popular: 658, trending: 539

> High-contrast typographic canvas

## Description

Play.studio employs a stark, high-contrast aesthetic with a minimalist canvas and precisely placed typographic elements. The design emphasizes sharp edges, though rounded corners appear selectively on content blocks, creating a subtle tension. A singular, vivid violet accent color provides strategic visual punctuation against a largely monochrome text and background palette, highlighting interactivity and specific content categories. The overall presentation is sparse, prioritizing clear typography and a clean data presentation to convey information directly.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, hero backgrounds, primary surface for content |
| Ink Black | #000000 | neutral | Primary text, headers, default icon fills, default borders |
| Storm Gray | #808080 | neutral | Muted text for secondary information, card borders |
| Vivid Violet | #4600ff | brand | Accent for interactive links, outlined button borders, key headings, active categories – a powerful contrast against the monochrome |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | Times New Roman | 400, 700 | 10px | 1.00 | Decorative and occasional body text, used sparingly for specific small information due to its limited size range in this system. |
| HelveticaNow | Helvetica Neue | 200, 300 | 18px, 24px, 36px, 160px | 0.80, 1.20, 1.40 | The primary typeface for all headings, body copy, and interactive elements. Its variable weights emphasize a modern, clear voice. The lighter weights (200, 300) for large headings create an airy, architectural feel, distinct from traditional bold branding. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 18 | 1.4 |  |
| subheading | 24 | 1.2 |  |
| heading | 36 | 1.2 | -0.72 |
| display | 160 | 0.8 | -11.2 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "default": "0px",
    "contentBlocks": "20px"
  },
  "elementGap": "20px",
  "sectionGap": "118px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Text Button

**Role:** Interactive elements for navigation and content filtering.

Transparent background with Ink Black text (#000000). No border, no radius, but uses 40px right padding for visual separation.

### Text Link - Vivid Violet

**Role:** Primary Call to Action for internal navigation or category selection.

Transparent background, Vivid Violet text (#4600ff), with a Vivid Violet (#4600ff) border-bottom interaction, maintaining a crisp, flat aesthetic. No radius. 40px right padding.

### Content Card - Sharp

**Role:** Container for informational blocks without visual hierarchy.

Transparent background, sharp 0px radius, no shadow, no padding.

### Content Card - Rounded

**Role:** Container for visual content like news items or project previews.

Transparent background, 20px border-radius, no shadow, no padding. These cards frequently host imagery or media.

## Do's

- Prioritize Ink Black (#000000) for all primary text and Canvas White (#ffffff) for backgrounds to maintain high contrast.
- Use HelveticaNow weight 300 for large headings to achieve an authoritative yet understated presence.
- Employ Vivid Violet (#4600ff) exclusively for interactive elements like links and buttons, or for significant categorical labels.
- Apply 20px border-radius to visual content cards while keeping most structural elements sharp (0px radius).
- Maintain generous section gaps of 118px to ensure ample white space and clear content separation.
- Utilize 40px right padding on text buttons and links to create a consistent interactive zone baseline.
- Incorporate Storm Gray (#808080) for secondary text or subtle borders when full contrast is not required.

## Don'ts

- Do not introduce additional saturated colors; Vivid Violet (#4600ff) is the sole chromatic accent.
- Avoid heavy shadows or gradients; rely on contrast and white space for visual hierarchy.
- Do not use Times for prominent display text; its role is limited to small, specific informational elements.
- Do not deviate from the established type scale and letter spacing for HelveticaNow; precise typography is key.
- Do not add unnecessary borders or backgrounds to elements that are not explicitly defined as cards or interactive components.
- Avoid centered text blocks for body content; prefer left-aligned text for readability.
- Do not use small font sizes (e.g., 10px) for primary calls to action or critical information.

## Layout

The page maintains a centered, max-width contained layout, with no specific max-width detected but a strong sense of a confined content area. The hero section is characterized by a prominent centered headline over a white background, followed by sections with consistent vertical spacing of 118px. Content often alternates between text and visual blocks, incorporating a grid of 3-column rounded cards for displaying project previews or news items. The navigation is a minimalist top bar with text links, devoid of heavy interactive elements, reflecting the sparse UI.

## Imagery

This system primarily uses product-focused photography and abstract graphics contained within distinct content cards. Photography is often full-bleed within the card, cropped tightly and used to showcase the product or subject without lifestyle context. Illustrations appear to be flat, possibly abstract or geometric, serving a decorative atmosphere rather than technical explanation. Icons are minimal, outlined, and monochromatic (Ink Black or Vivid Violet). Imagery density is light, used to break up text-dominant sections, existing as isolated visual statements rather than overlapping or dynamic compositions.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Monochromatic base palette with a single vibrant accent color for interaction and highlighting. |
| Linear | Emphasis on precise typography, minimal UI, and a high-contrast text-heavy presentation. |
| Figma | Clean white canvas, emphasis on clarity, and modern, accessible sans-serif typography. |
| Pitch | Bold headlines using light weights for large sizes, paired with a simple, direct layout. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #4600ff
primary action: #4600ff (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #4600ff border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Create a content card for a project preview: Rounded Content Card (20px radius, transparent background). Inside, place "New Work LangChain" (HelveticaNow, 18px, weight 400, #000000) below a square image.
3. Create a navigation link: Ghost Text Button with text "Work" (HelveticaNow, 18px, weight 400, #000000, 40px right padding). Ensure it has no border or background.
4. Create a featured category link: Text Link - Vivid Violet with text "AI and technology" (HelveticaNow, 18px, weight 400, #4600ff, 40px right padding). Its hover state should show a Vivid Violet (#4600ff) bottom border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520965596-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520965596-thumb.jpg |

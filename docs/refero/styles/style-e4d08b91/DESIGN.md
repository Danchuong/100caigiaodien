# Интранетус — Refero Style

- Refero URL: https://styles.refero.design/style/e4d08b91-f251-4dc8-b30f-147e4a762ed3
- Site URL: https://intranetus.com
- ID: e4d08b91-f251-4dc8-b30f-147e4a762ed3
- Theme: light
- Industry: productivity
- Created: 2026-04-30T03:40:27.435Z
- Ranks: newest: 98, popular: 1288, trending: 1294

> Whiteboard doodle productivity

## Description

The Интранетус design system presents a clean, brightly lit interface centered around a vivid blue accent. This blue is used sparingly but impactfully to highlight interactive elements and convey primary actions. Typography is a mix of modern sans-serifs and a more traditional serif for headings, creating a subtle tension between straightforward utility and classic legibility. Component surfaces are generally crisp white, relying on ample negative space and minimal borders rather than heavy shadows for definition.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #ffffff | neutral | Page backgrounds, card surfaces, UI containers |
| Ink Black | #000000 | neutral | Primary text, strong borders, icons, and some background fills on specific elements like navigation |
| Deep Graphite | #2c3038 | neutral | Secondary background surfaces for UI elements, providing subtle differentiation |
| Medium Gray | #555555 | neutral | Secondary text color and some borders, offering visual relief from pure black |
| Light Gray | #b3b3b3 | neutral | Medium-contrast borders, control outlines, and structural separators. Do not promote it to the primary CTA color |
| Shadow Tint | #96989c | neutral | Base tint for subtle shadows, suggesting depth without strong opacity |
| Action Blue | #0089ff | brand | Primary actionable elements like links, button backgrounds, and active state indicators |
| Muted Blue Wash | #b3dcff | brand | Subtle borders for interactive elements, providing a soft blue outline |
| Vivid Violet | #384bec | accent | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ALSArtemiusSans | Inter | 400, 700 | 13px, 14px, 15px, 16px, 18px, 21px | 1.00, 1.20, 1.40, 1.50, 2.67 | Body text, navigation, helper text, and various UI elements. Its widespread use makes it the primary workhorse font, maintaining legibility and a contemporary feel. |
| ALSArtemiusSerif | Merriweather | 400, 700 | 16px, 21px, 28px, 40px, 48px | 1.20, 1.30 | Headings and prominent display text. The serif face adds a touch of classic authority and visual distinction to section titles. |
| ALS-logo | Arial | 400 | 18px, 25px | 1.00 | Used for specific brand elements and unique text styles, contributing to the brand's distinctive visual identity. |
| Artemius Sans Neue | Inter | 400 | 16px, 18px | 1.00, 1.20 | Supplementary text, icons, and less prominent UI labels. Used to provide visual contrast and hierarchy without adding another full font family. |
| als_hauss | Montserrat | 500 | 64px | 1.20 | Large, impactful headings for hero sections, demanding attention with its significant size and medium weight. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.4 | 0.26 |
| body | 16 | 1.4 | 0.32 |
| subheading | 18 | 1.2 | 0.36 |
| heading-sm | 21 | 1.2 | 0.42 |
| heading | 28 | 1.2 | 0.56 |
| heading-lg | 40 | 1.2 | 0.8 |
| display | 64 | 1.2 | 1.28 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "20px",
    "badges": "12px",
    "buttons": "25px",
    "default": "4px"
  },
  "elementGap": "10px",
  "sectionGap": "28px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Primary navigation element

Text in ALSArtemiusSans, often weight 400 or 700. Interactive elements with a border-bottom of 1px solid Action Blue (#0089ff) on hover or active state, and a color change to Action Blue. Default links are Ink Black (#000000).

### Primary Action Button

**Role:** Call to action button

Filled button with a background of Action Blue (#0089ff) and text color of Canvas (#ffffff). Border-radius of 25px for a pill-like shape. Padding: 10px-11px horizontal, 7px-8px vertical.

### Ghost Action Button

**Role:** Secondary or tertiary action button

Transparent background with a border of 1px solid Action Blue (#0089ff) and text in Action Blue (#0089ff). Rounded corners apply at 25px radius. Often used for less prominent actions.

### Info Badge

**Role:** Categorization or status indicator

Transparent background with Ink Black (#000000) text and a border-radius of 12px. Padding can vary, but typically has generous vertical padding (e.g., 52px top).

### Card Surface

**Role:** Content container

Utilizes Canvas (#ffffff) as the background. Default card surfaces have no border, shadow, or padding, appearing as a clean, flat plane. Used to contain sections of content.

## Do's

- Prioritize Canvas (#ffffff) and Ink Black (#000000) for most UI elements, reserving Action Blue (#0089ff) for interactive states and primary calls to action.
- Apply a 25px border-radius to all primary buttons for a consistent pill-shape.
- Use ALSArtemiusSans for body text, UI labels, and navigation, maintaining an overall functional aesthetic.
- Employ ALSArtemiusSerif for main headings (28px and larger) to add gravitas and visual interest.
- Maintain comfortable spacing with a base unit of 4px; target 10px for element gaps and 28px for section gaps.
- Utilize mild shadows like rgba(44, 48, 56, 0.5) 0px 30px 140px -50px for subtle elevation, primarily on interactive elements or images.
- Use the Muted Blue Wash (#b3dcff) for subtle interactive element borders that require a softer visual cue than solid Action Blue.

## Don'ts

- Avoid using multiple chromatic colors in close proximity; the design relies on a single vivid blue for accent.
- Do not introduce strong, opaque shadows; leverage the subtle, diffuse shadows provided (rgba(44, 48, 56, 0.5) 0px 30px 140px -50px).
- Refrain from heavy background gradients or patterns; the system values clean, solid surfaces.
- Do not deviate significantly from the established typefaces; ALSArtemiusSans and ALSArtemiusSerif define the typographic voice.
- Avoid excessive use of borders; many elements are defined by negative space and clear backgrounds.
- Do not use dark backgrounds for main content areas; the system is firmly established as a light theme with bright Canvas (#ffffff) surfaces.

## Layout

The page primarily uses a max-width contained layout, with content centered. The hero section often features a large, whimsical illustration above the fold, with a prominent headline (display-sized) centered. Section rhythm is consistent, with generous vertical spacing between content blocks and an overall airy feel. Content is typically arranged in either a single-column centered stack or alternating text-and-image patterns. No explicit grid usage for card layouts is prominent, but rather distinct content blocks. Navigation consists of a top bar that appears fixed, featuring text links and simple icons.

## Imagery

The visual language is characterized by abstract, colorful, and often whimsical illustrations resembling whiteboard doodles or children's drawings. These graphics feature organic, freeform shapes, saturated colors (neons like lime green, hot pink, vivid yellow), and playful scribbled elements. Imagery is primarily decorative rather than product-focused, serving to imbue the interface with a lighthearted, creative atmosphere. Icons are minimalist, often outlined in black, with a medium stroke weight. Density is low, with illustrations occupying ample white space, ensuring the UI remains text-dominant.

## Elevation

| Element | Style |
| --- | --- |
| Interactive Link/Button | rgba(44, 48, 56, 0.5) 0px 30px 140px -50px |
| Image | rgba(44, 48, 56, 0.5) 0px 30px 80px -30px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | White canvas aesthetic, minimal borders, and a reliance on color for interactive emphasis, coupled with a clean sans-serif typography. |
| Linear | High contrast between text and background, focus on functional typography, and subtle use of a single accent color for interaction and status. |
| Notion | Dominantly white interface, use of varied text sizes for hierarchy, and a calm, spacious layout promoting focus on content. |
| Mailchimp | Whimsical, colorful illustrations used to soften a functional interface, and a clear, readable sans-serif for main text. |
| Miro | Whiteboard-like canvas, with playful graphic elements and a primary focus on clean UI for creative collaboration. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #0089ff
primary action: #0089ff (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #0089ff border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Design a navigation link: text Ink Black (#000000), font ALSArtemiusSans weight 400, on hover, a 1px solid Action Blue (#0089ff) border-bottom and text Action Blue (#0089ff).
3. Generate a heading for a section: text Ink Black (#000000), font ALSArtemiusSerif weight 700, size 48px, line-height 1.2.
4. Produce an info badge: transparent background, text Ink Black (#000000), border-radius 12px, 52px top padding.
5. Create a simple content card: background Canvas (#ffffff), no border, no shadow, 0px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520406184-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520406184-thumb.jpg |

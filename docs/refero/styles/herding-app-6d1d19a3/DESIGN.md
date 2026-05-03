# herding.app — Refero Style

- Refero URL: https://styles.refero.design/style/6d1d19a3-294d-4bad-9f8b-f775cb24b47a
- Site URL: https://herdi.ng
- ID: 6d1d19a3-294d-4bad-9f8b-f775cb24b47a
- Theme: dark
- Industry: saas
- Created: 2026-02-14T19:20:17.000Z
- Ranks: newest: 1186, popular: 457, trending: 1034

> Graphite workshop under a soft spotlight. Surfaces are not black, but deep charcoal, illuminated by concentrated white text and a single vibrant highlight for interactive elements.

## Description

This design system evokes a digital craftsman's workshop feel, with a muted dark palette and subtle elevation shifts creating a sense of depth and organization. The interplay of soft, almost invisible backgrounds with crisp white typography and geometric accents defines a precise yet approachable atmosphere. Rounded corners on interactive elements provide a gentle contrast to the otherwise stark, modular structure, hinting at user-friendliness within a powerful system.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Storm Slate | #232320 | neutral | Page background, primary card surfaces, foundational UI elements. |
| Deep Graphite | #1c1c1a | neutral | Background for secondary panels and sub-sections, indicating a subtle recess or grouping. |
| Ash Stone | #2e2e2b | neutral | Elevated card backgrounds, slightly lighter than the base Storm Slate, indicating a raised surface. |
| Iron Oxide | #35352f | neutral | Tertiary card backgrounds or hover states, providing a slightly warmer, more textured feel. |
| Zinc Gray | #3e3e38 | neutral | Lightest background for elevated surfaces or active states, offering subtle distinction. |
| Quartz Dust | #45453 | neutral | Button backgrounds for secondary actions, blending into the dark theme. |
| Ghost White | #fffffe | neutral | Primary text, headings, icons, interactive element labels — the dominant foreground color that cuts through the dark background. |
| Silver Thread | #a3a29c | neutral | Secondary text, subtle borders, inactive states, providing high contrast without being pure white. |
| Whisper Gray | #75746c | neutral | Descriptive text, icon details, placeholder text — a softer neutral that recedes slightly. |
| Ember White | #fefeda0e | accent | Low-opacity button background that suggests interaction without high contrast. |
| Active Charcoal | #7f7e77 | accent | Solid background for primary interactive buttons, indicating an active or selected state. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Styrene | Montserrat | 400 | 11px, 14px, 15px, 20px, 27px, 45px | 1.12 | Universal font for all text elements: headings, body text, buttons, and links. Its geometric, slightly condensed form supports the precise, structured aesthetic and makes technical content approachable. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.56 | -0.55 |
| body-sm | 14 | 1.2 | -0.7 |
| subheading | 20 | 1.2 | -1 |
| heading | 27 | 1.12 | -1.35 |
| display | 45 | 1.12 | -2.25 |

## Spacing & Shape

```json
{
  "radius": {
    "pills": "9999px",
    "buttons": "16px",
    "default": "7.5px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": "1280px"
}
```

## Components

### Sign Up / Log In Button Group with CTA



### How It Works — Steps with CTA



### Collect Content Types — Feature Card



### Primary Action Button

**Role:** Interactive element

Rounded rectangle button. Background: `Ember White` (rgba(254, 254, 218, 0.055)), Text: `Whisper Gray` (rgba(255, 252, 236, 0.392)) in Styrene 15px/400. Rounded corners 16px. Padding: 0px vertical, 16px horizontal.

### Text Link Button

**Role:** Interactive element

Transparent button with `Ghost White` text (rgba(255, 255, 254, 0.92)) in Styrene 15px/400. No border radius, 0px padding. Focuses on pure functionality with minimal visual adornment.

### Accent Call-to-Action Button

**Role:** Primary Call to Action

Solid background button for critical actions. Background: `Active Charcoal` (rgb(127, 126, 119)), Text: `Slate` (rgb(22, 22, 21)) in Styrene 15px/400. Rounded corners 16px. Padding: 0px vertical, 16px horizontal.

### Pill Button

**Role:** Contextual filter or tag

Highly rounded button. Background: rgba(255, 255, 236, 0.173), Text: `Ghost White` (rgba(255, 255, 254, 0.92)) in Styrene 15px/400. Radius: 9999px. Padding: 0px vertical, 0px horizontal. Used for compact, standalone actions.

### Information Card (Level 1)

**Role:** Content container

Background: `Ash Stone` (#2e2e2b), with 7.5px border radius. Padding: minimum 16px on all sides, often 32px vertical and 45px horizontal. Features a subtle inner shadow defined by `rgba(8, 9, 1, 0.08) 0px 56px 72px 0px inset`.

### Information Card (Level 2)

**Role:** Nested content container

Background: `Deep Graphite` (#1c1c1a), with 7.5px border radius. Used for content nested within Level 1 cards or distinct content blocks.

### Feature Icon Card

**Role:** Atomic feature display

Small square card with `Quartz Dust` (#45453e) background, 7.5px radius. Contains icons or short labels, typically used in grids. Internally padded with 8px.

## Do's

- Use `Storm Slate` (#232320) as the foundational background for pages and large sections to ensure a consistent dark theme.
- Apply `Ghost White` (#fffffe) for all primary text, headings, and interactive elements to ensure readability against dark backgrounds.
- Maintain the Styrene font at weight 400 for all typography, adjusting size and line-height according to the type scale.
- Utilize 16px corner radius for most interactive buttons and 7.5px for content cards, establishing a consistent softening of rectangular forms.
- Apply `rgba(8, 9, 1, 0.08) 0px 56px 72px 0px inset` shadow for subtle internal depth on elevated card components.
- Employ `Ember White` (rgba(254, 254, 218, 0.055)) as a low-opacity background for secondary buttons, indicating interactivity without demanding attention.
- Use `9999px` radius exclusively for pill-shaped buttons and tags to create a distinctive, self-contained interactive element.

## Don'ts

- Do not introduce highly saturated colors for backgrounds or major UI elements; maintain the low-chroma dark palette.
- Avoid using drop shadows for elevation; rely on the subtle inset shadow and background color shifts (`Deep Graphite` vs `Ash Stone`) to indicate depth.
- Do not use multiple font families; all text must be Styrene 400.
- Avoid arbitrary padding or margin values; adhere strictly to the 4px base unit spacing scale (4px, 8px, 12px, 16px, 32px, 45px).
- Do not use pure black (#000000) for backgrounds; `Storm Slate` (#232320) is the darkest base color.
- Do not use plain rectangular buttons without corner radius; all interactive buttons should have at least 16px radius, or 9999px for pills.

## Layout

The layout is a max-width 1280px centered container, providing ample breathing room within the dark canvas. The hero section features a left-aligned, large headline, contrasted by right-aligned information cards. Content sections throughout the site are primarily modular, organized into distinct rectangular cards or panels. Grids are evident for feature displays (3-column) and interactive element arrangements. Vertical spacing between sections is generous (48px standard). The site employs a sticky top navigation bar with minimal elements, maintaining a focused user experience.

## Imagery

The visual language is dominantly UI and abstract. There are no photographs or complex illustrations. Product screenshots are contained within UI components, often at an angle, blending into the dark theme. Icons are monochromatic, filled `Ghost White` against dark backgrounds, with a clean, geometric style. The key visual element is a vibrant green-to-blue linear gradient used as a background or highlight in specific sections, providing a burst of digital energy against the muted dark interface. This gradient is treated as a contained accent, not a full-bleed element, emphasizing precision.

## Elevation

| Element | Style |
| --- | --- |
| Information Card (Level 1) | rgba(8, 9, 1, 0.08) 0px 56px 72px 0px inset, rgba(8, 9, 1, 0.024) 0px 24px 29px 0px inset, rgba(8, 9, 1, 0.02) 0px 11px 14px 0px inset, rgba(8, 9, 1, 0.01) 0px 6px 7px 0px inset, rgba(8, 9, 1, 0.008) 0px 2.5px 2px 0px inset, rgba(8, 9, 1, 0.047) 0px 0px 0px 1px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochromatic dark mode UI with sharp typography and subtle elevation through background color shifts, often using contained accent gradients. |
| Raycast | Command-line interface aesthetic applied to a GUI, featuring strong use of dark neutrals, precise typography, and highly functional, minimalistic components. |
| Arc Browser | Heavy reliance on dark gray values, geometric design elements, and contained bursts of colorful gradients or highlights against a muted UI. |
| GitHub (Dark Mode) | Systematic use of varying shades of dark gray backgrounds to denote hierarchy and structure, combined with crisp white text and selective accent colors. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: `Ghost White` (#fffffe)
- Background: `Storm Slate` (#232320)
- Primary CTA background: `Active Charcoal` (#7f7e77)
- Secondary CTA background: `Ember White` (rgba(254, 254, 218, 0.055))
- Border/Divider: `Silver Thread` (#a3a29c)

### 3-5 Example Component Prompts
1. **Create a hero section:** Left-aligned heading 'Bookmarking for internet herders.' using Styrene 45px/400 `Ghost White` and -2.25px letter spacing. Add body text 'Herdi.ng is a no-frills visual bookmarking tool...' using Styrene 15px/400 `Ghost White` and -0.75px letter spacing. Ensure the section background is `Storm Slate` (#232320).
2. **Generate a primary action button:** Button labeled 'Sign up' with `Active Charcoal` (#7f7e77) background, `Slate` (#161615) text (Styrene 15px/400, -0.75px letter spacing), 16px border-radius, and 0px vertical, 16px horizontal padding.
3. **Design an information card:** Background `Ash Stone` (#2e2e2b), 7.5px border-radius, `rgba(8, 9, 1, 0.08) 0px 56px 72px 0px inset` shadow. Inside, add a title 'Sign up for the early beta.' with `Ghost White` text (Styrene 20px/400, -1px letter spacing), and body text 'Only for testing purposes.' with `Whisper Gray` text (Styrene 15px/400, -0.75px letter spacing). Apply 32px vertical and 45px horizontal internal padding.
4. **Create a theme switcher pill button:** A button labeled 'Theme switcher' with background `rgba(255, 255, 236, 0.173)`, `Ghost White` text (Styrene 15px/400, -0.75px letter spacing), and 9999px border-radius. Include 0px vertical and 0px horizontal padding, with an icon (using `Ghost White` fill) to the left of the text, separated by 8px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925917937-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925917937-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6d1d19a3-294d-4bad-9f8b-f775cb24b47a-1777583732340-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6d1d19a3-294d-4bad-9f8b-f775cb24b47a-1777583732340-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6d1d19a3-294d-4bad-9f8b-f775cb24b47a-1777583732340-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6d1d19a3-294d-4bad-9f8b-f775cb24b47a-1777583732340-preview-detail-poster.jpg |

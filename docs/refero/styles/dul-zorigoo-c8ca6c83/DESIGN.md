# Dul Zorigoo — Refero Style

- Refero URL: https://styles.refero.design/style/c8ca6c83-3197-4b19-af1c-b29d6f829c5f
- Site URL: https://dzrgo.com
- ID: c8ca6c83-3197-4b19-af1c-b29d6f829c5f
- Theme: light
- Industry: design
- Created: 2026-04-30T01:20:19.960Z
- Ranks: newest: 626, popular: 504, trending: 328

> Monochrome, text-first workbench.

## Description

Dul Zorigoo's design system evokes an organized, understated workspace with strong typographic presence. It uses a near-monochromatic palette where all interface elements exist within a narrow range of grays, allowing content to take visual precedence. Interactions are subtle, marked by soft borders and minimal spatial shifts rather than vivid color, creating a quiet, focused user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #ffffff | neutral | Page backgrounds, card surfaces, UI canvases |
| Tarmac | #252525 | neutral | Primary text, prominent headings, strong link text. High contrast against light surfaces |
| Fog | #ebebeb | neutral | Subtle borders, dividers, ghost button outlines. Provides soft definition between elements |
| Asphalt | #a8a8a8 | neutral | Secondary text, muted headings, captions. A softer alternative to Tarmac for subordinate information |
| Pebble | #8e8e8e | neutral | Muted helper text, tertiary information. Fades into the background for low-priority content |
| Midnight | #000000 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |
| Ivory | #fbfbfb | neutral | Text color on Midnight backgrounds |

## Spacing & Shape

```json
{
  "radius": {
    "links": "8px",
    "buttons": "8px"
  },
  "elementGap": "6px",
  "sectionGap": "32px",
  "cardPadding": "8px",
  "pageMaxWidth": "1137px"
}
```

## Components

### Ghost Filter Button

**Role:** Used for navigation and filtering categories

Text in Tarmac (#252525) on a transparent background with no padding. Interacts subtly through hover/active states. Border is set to `0px`.

### Pill Filter Button

**Role:** Used for navigation and filtering categories

Text in Tarmac (#252525) on a transparent background, 8px padding applied horizontally (paddingRight/Left) and 0px vertically, with a border-radius of 8px. Border `1px` solid, Fog (#ebebeb).

### Active Pill Button

**Role:** Indicates the currently selected filter or category.

Text in Ivory (#fbfbfb) on a Midnight (#000000) background, 8px padding horizontally, 0px vertically, with a border-radius of 8px. Used sparingly for strong accent.

### Thumbnail Card

**Role:** Displays content previews, typically an image with a text label below.

Acts as a container for visual content. Implicit padding for internal elements, likely using the base element gap of 6px. No explicit border-radius on the card itself, but contained interactive elements (buttons/links) have a radius of 8px.

### Subtle Link

**Role:** Standard inline links and navigation items within sidebars.

Text Tarmac (#252525) with no explicit decoration. Distinguished by minimal horizontal padding of 8px and a radius of 8px for interactive areas or hover states. Border `1px` solid, Fog (#ebebeb).

## Do's

- Prioritize Tarmac (#252525) for all primary text and headings.
- Use Canvas (#ffffff) for all main backgrounds and surface elements.
- Define separation with Fog (#ebebeb) for subtle borders and dividers.
- Apply an 8px border-radius to all interactive elements like buttons and links.
- Use Midnight (#000000) and Ivory (#fbfbfb) exclusively for primary active button states.
- Maintain a conservative use of spacing, adhering to 6px for element gaps and 32px for section separation.

## Don'ts

- Avoid using saturated or vivid colors; the palette is strictly achromatic with very limited exceptions.
- Do not introduce strong shadows or excessive elevation; the design relies on flat surfaces and subtle borders.
- Do not use multiple font families; all typography should adhere to the singular, strong typographic voice.
- Avoid large, decorative headings; headlines are typically concise and integrated into the content flow.
- Do not apply padding or margins that significantly deviate from the established 4px base unit or token values.
- Do not use `0px` border-radius for interactive elements unless it's a specific ghost button variant.

## Layout

The page uses a maximum content width of 1137px, centrally aligned. The hero section is subtle, starting with text on the left and evolving into a grid of content. Content is arranged predominantly in a multi-column grid, often 2 or 3 columns, where visual elements (photos/screenshots) are paired with text labels below. Vertical rhythm is established through consistent 32px section gaps and smaller 6px element gaps. Navigation is sidebar-based, with current status highlighted by small borders, complemented by horizontal filter buttons above content areas.

## Imagery

This system primarily uses static photography and product UI screenshots. Photography ranges from evocative black & white landscapes to slightly desaturated color images, often cropped tightly or presented within contained frames. UI screenshots are functional and explanatory, blending seamlessly into the monochromatic design. Imagery serves a decorative and illustrative role, providing context and visual interest without overwhelming the clean interface. Icons, where present, are minimal, outlined, and monochromatic, typically in Tarmac (#252525).

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochromatic interface, strong focus on typography, and subtle interactive elements. |
| Figma | Clean, utilitarian aesthetic for a creative tool, emphasizing content over decorative UI, similar subtle borders. |
| Are.na | Grid-based content presentation for visual collections, with a minimalist UI and neutral color palette. |
| Supabase | Developer-focused tool with a clean, low-contrast UI and a preference for functionality over strong branding colors. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #252525
background: #ffffff
border: #ebebeb
accent: #000000
primary action: no distinct CTA color

Example Component Prompts:
1. Create a filter button: Text 'All' in Tarmac (#252525), no background, no vertical padding, 8px horizontal padding, 8px border-radius, 1px solid Fog (#ebebeb) border.
2. Create an active filter button: Text 'Photography' in Ivory (#fbfbfb), Midnight (#000000) background, 0px vertical padding, 8px horizontal padding, 8px border-radius.
3. Create a content card with an image: A square canvas (#ffffff) card with a photo and a heading 'Kew Gardens' below it in Tarmac (#252525), using 6px element gap for internal spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512033084-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512033084-thumb.jpg |

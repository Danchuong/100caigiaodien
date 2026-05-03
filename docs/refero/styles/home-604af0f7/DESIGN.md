# Home — Refero Style

- Refero URL: https://styles.refero.design/style/604af0f7-b4c3-4921-93af-9da03df81493
- Site URL: https://www.swoosh.nike
- ID: 604af0f7-b4c3-4921-93af-9da03df81493
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:37:24.391Z
- Ranks: newest: 559, popular: 1171, trending: 1174

> Gaming console dark mode

## Description

The .SWOOSH brand aesthetic lives in a stark, high-contrast dark mode environment, leveraging deep blacks and near-blacks as a canvas. Typography is direct and impactful, primarily in white or muted gray against dark surfaces, with a single vivid lime green acting as a functional accent for interactive elements. Components are structured but lightweight, often defined by subtle borders rather than heavy fills, and maintain a consistent, moderately rounded shape.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #111111 | neutral | Page backgrounds, default text, button borders and filled button backgrounds, nav background, and general surface accent |
| Ghost | #ffffff | neutral | Primary text, icon fills, ghost button text, and light card backgrounds |
| Parchment | #e5e5e5 | neutral | Decorative borders around various elements, often text or sections, providing subtle definition against dark backgrounds |
| Slate | #39393b | neutral | Footer borders, subtle dividers |
| Carbon | #28282a | neutral | Card borders |
| Stone | #707072 | neutral | Subtle card borders on light surfaces |
| Deep Space | #1f1f21 | neutral | Darker card backgrounds, providing a slight elevation above the main background |
| Electron Green | #b7ff2c | accent | CTA button fills, active elements, and interactive accents — a vibrant pop that signifies action and engagement |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roobert | system-ui | 400, 500, 700 | 14px, 16px, 20px, 24px, 64px, 110px | 0.85, 1.00, 1.20, 1.40, 1.50 | Primary brand typeface for headings, larger display text, and key navigational elements. Its sans-serif structure keeps the brand feeling modern and direct. |
| ui-sans-serif | system-ui | 400, 500, 700 | 14px, 16px | 1.20, 1.50 | Secondary typeface for body text, links, and detailed information, ensuring high legibility within the dark theme. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.2 |  |
| body | 16 | 1.5 |  |
| subheading | 20 | 1.4 |  |
| heading | 24 | 1.2 |  |
| heading-lg | 64 | 1 |  |
| display | 110 | 0.85 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "buttons": "6px",
    "default": "6px",
    "navElements": "6px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action button

Filled with Electron Green (#b7ff2c), text in Midnight Ink (#111111), and a border radius of 6px. Padding is defined by context, but typically feels spacious, e.g., 20px horizontal for small buttons.

### Ghost Navigation Button

**Role:** Navigation and secondary action buttons

Transparent background, Ghost (#ffffff) text, and a decorative Parchment (#e5e5e5) border on hover or active state. No border radius visually, but takes on the parent container's styling. Minimal padding, often integrated directly into text lines.

### Dark Filled Button

**Role:** Tertiary action button or navigation element

Filled with Midnight Ink (#111111), Ghost (#ffffff) text, and a border radius of 6px. Features a 16px padding on all sides.

### Light Content Card

**Role:** Information display card on dark background

Ghost (#ffffff) background, with padding of 20px around content. Features a Stone (#707072) border to define its edges. Border radius is 6px. No shadows are applied.

### Dark Content Card

**Role:** Information display card on dark background

Deep Space (#1f1f21) background, with generous padding (e.g., 48px horizontal, 48px top, 28px bottom). Features a Carbon (#28282a) border. Border radius is 6px. No shadows are applied.

### Cookie Settings Modal

**Role:** Overlay content container, e.g., for privacy settings

Dark panel, likely Midnight Ink or Deep Space background, with a distinct visual presence due to its larger size and internal padding of 48px. It uses Ghost (#ffffff) for primary text and a checkbox with Electron Green fill. Features a 6px border radius.

## Do's

- Prioritize Midnight Ink (#111111) for backgrounds and Ghost (#ffffff) for primary text to maintain the brand's dark, high-contrast aesthetic.
- Use Electron Green (#b7ff2c) exclusively for primary calls to action, active states, and small, functional highlights.
- Apply a consistent 6px border radius to all interactive elements, cards, and image containers for a unified feel.
- Employ Roobert for all headings and key navigational text, varying sizes and weights to establish clear hierarchy.
- Maintain comfortable spacing with an element gap of 16px between most UI elements and card padding of 20px unless otherwise specified.
- Define separation between elements using subtle Parchment (#e5e5e5) borders rather than heavy box shadows or strong background differentiation.
- Ensure large text, especially headings, uses a normal letter-spacing, while body text might have subtle tracking adjustments if needed for readability at smaller sizes.

## Don'ts

- Avoid using saturated colors other than Electron Green (#b7ff2c) for interactive elements or brand accents.
- Do not introduce strong drop shadows; rely on border treatments and background color variation for element separation.
- Refrain from using excessively tight or stretched letter spacing; prioritize 'normal' tracking for most text.
- Do not use white or light backgrounds for main content sections; the system is fundamentally dark mode.
- Avoid arbitrary border radii; stick to the established 6px standard for all rounded corners.
- Do not embed images or illustrations that conflict with the monochromatic, sharp visual styling without explicit brand guidelines.
- Steer clear of gradients unless they are explicitly defined as brand elements, as the system favors solid colors.

## Layout

The page primarily uses a full-bleed dark background that extends across the viewport. Hero sections feature large, centered headlines often overlaid on video or atmospheric photography. Section rhythm is created through large vertical gaps, sometimes alternating with dark cards or content blocks. Content is arranged in alternating text-left/image-right patterns or centered stacked blocks, creating a spacious and intentional flow. Navigation is handled by a fixed top bar on a Midnight Ink background, maintaining global access.

## Imagery

The imagery strategy centers around high-quality product photography and 3D renders, often featuring dimly lit, dynamic scenes of gaming hardware or digital assets. Photography is typically mood-driven, with depth-of-field effects and a generally desaturated, cool color palette that allows the UI's Electron Green accents to pop. Visuals are often full-bleed or contained within large, dark sections, serving to set an immersive atmosphere rather than merely illustrating content. Icons are minimalist, outlined, and monochromatic, primarily in Ghost (#ffffff), maintaining a functional rather than decorative role.

## Elevation

| Element | Style |
| --- | --- |
| Nav bar | rgba(17, 17, 17, 0.125) 0px 2px 6px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Razer | Dark theme UI with a single vibrant accent color (green), focused on gaming hardware and lifestyle. |
| PlayStation | Dominantly dark interface, strong emphasis on immersive visuals and product showcasing with minimal, structured UI. |
| Xbox | Dark mode dashboard aesthetic, high contrast typography, and use of subtle borders/depth over heavy shadows. |
| Discord | Dark primary theme, with distinct bright accent colors for interactive elements and a strong, modern sans-serif typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #ffffff
- background: #111111
- border: #e5e5e5
- accent: #b7ff2c
- primary action: #b7ff2c (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #b7ff2c background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a Dark Content Card: Deep Space (#1f1f21) background, with a Carbon (#28282a) border, 6px border radius, Ghost (#ffffff) text, 48px left and right padding.
3. Implement a Ghost Navigation Button: Transparent background, Ghost (#ffffff) text, Roobert regular, 14px font size, no explicit border on inactive state, 6px horizontal padding.
4. Build a Light Content Card: Ghost (#ffffff) background, Stone (#707072) border, 6px border radius, Midnight Ink (#111111) text, 20px padding all around.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513024929-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513024929-thumb.jpg |

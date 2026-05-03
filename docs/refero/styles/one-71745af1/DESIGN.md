# ONE — Refero Style

- Refero URL: https://styles.refero.design/style/71745af1-2e53-4925-992e-82773e55ccd6
- Site URL: https://one-is.com
- ID: 71745af1-2e53-4925-992e-82773e55ccd6
- Theme: dark
- Industry: media
- Created: 2026-04-30T02:32:28.246Z
- Ranks: newest: 351, popular: 1057, trending: 997

> Shadowbox cinematic frames

## Description

ONE embraces a stark, high-contrast aesthetic where rich black surfaces meet crisp monochrome typography. The visual experience is anchored by dynamic large-format video content, framed within softly rounded containers. Interaction elements are minimalist, appearing as ghost buttons with fine outlines in a near-white hue, creating a sense of understated command. The overall impression is one of sophisticated, content-driven minimalism.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #000000 | neutral | Page background, primary text, card background, outlined button border. Acts as the dominant canvas for all content |
| Ghost Outline | #fbfbfa | neutral | Soft icon strokes, subtle dividers, and low-emphasis decorative details. Do not promote it to the primary CTA color |
| Muted Ash | #bec0c5 | neutral | Secondary text for subtle hierarchy and decorative borders |
| Skybound Blue | #0075ff | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| MagicUiPro | system-ui | 500, 600 | 18px, 20px, 24px | 1.00, 1.20, 1.40 | All textual content, including headings, body text, and interactive elements. Its consistent tracking across sizes contributes to a unified, precise typographic voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 18 | 1.2 |  |
| body-sm | 20 | 1.2 |  |
| body | 24 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "buttons": "999px"
  },
  "elementGap": "16px",
  "sectionGap": "96px",
  "cardPadding": "19px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Contact Button (Light)

**Role:** Interactive element (primary)

A ghost button for primary actions on light backgrounds. Features rounded corners at 999px, a border of 1px solid Midnight Void (#000000), and Ghost Outline (#fbfbfa) text. Padding is 0px top/bottom, 19.2px left/right.

### Ghost Contact Button (Dark)

**Role:** Interactive element (secondary)

A ghost button for secondary actions or contact calls to action on dark backgrounds. Features rounded corners at 999px, a border of 1px solid Ghost Outline (#fbfbfa), and Ghost Outline (#fbfbfa) text. Padding is 0px top/bottom, 28px left/right.

### Video Player Card

**Role:** Content display

A card component designed to frame video or image content. Has a Midnight Void (#000000) background, a border-radius of 12px, and no visible box shadow. Padding is 0px on all sides, allowing content to stretch to the edges.

## Do's

- Always use Midnight Void (#000000) as the dominant background color to maintain the dark, immersive feel.
- Frame primary visual content with a 12px border-radius, as seen in the Video Player Card component, for a consistent soft-edged presentation.
- Utilize Ghost Outline (#fbfbfa) exclusively for outlining interactive elements to preserve the minimalist aesthetic.
- Apply MagicUiPro with a -0.0100em letter-spacing to all text elements to establish a precise, uniform typographic voice.
- Maintain generous section spacing of 96px to create clear content separation and a spacious layout.
- Employ the 999px border-radius for all interactive buttons and tags to ensure a consistent pill-shaped form.
- Use Muted Ash (#bec0c5) for secondary text or subtle decorative lines to provide visual hierarchy without strong contrast.

## Don'ts

- Do not introduce strong accent colors in large blocks; color should act as functional punctuation, not primary decoration.
- Avoid heavy drop shadows or complex elevation; the design relies on flat surfaces and minimal depth.
- Do not deviate from the MagicUiPro font or its specified letter-spacing; it is central to the typographic identity.
- Refrain from using tight component and section spacing; the system prioritizes breathability and space.
- Do not use solid background buttons for primary calls to action; stick to ghost or outlined styles.
- Avoid sharp, un-rounded corners on significant content blocks like cards or media containers.
- Do not mix text colors for primary content; stick to Midnight Void (#000000) on light elements or Ghost Outline (#fbfbfa) on dark elements for readability.

## Layout

The page structure is full-bleed, with video content often spanning the entire viewport width, giving a sense of immersion. There is a strong emphasis on vertical stacking of content with generous section gaps of 96px, creating a spacious and unhurried rhythm. The header is minimal, featuring only a logo and a ghost contact button. Content is primarily centered or presented in balanced, often video-dominant, blocks. The text 'ONE is...' section showcases a distinct, multi-column grid for textual content, but maintains a wide, quiet layout.

## Imagery

This design system heavily features large-format video content or striking photography, typically presented in full-width or near full-width frames. Visuals are contained within soft 12px rounded rectangles, giving them a cinematic yet approachable feel. The focus is on the visual itself, often abstract or concept-driven, serving as atmospheric backdrops or direct content. Icons are minimal, outlined, and monochromatic, integrated seamlessly into the UI.

## Similar Brands

| Business | Why |
| --- | --- |
| A24 (Studio Site) | Exploits a minimalist, dark background with bold typography and prominent video content to create a strong, artistic brand presence. |
| Acme (Experimental Studio) | Uses full-bleed video backgrounds and subtle ghost buttons to create an immersive and sophisticated digital experience. |
| Momoco (Animation Studio) | Leverages dark UI, large media blocks, and simple, high-contrast text for a cinematic portfolio display. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000 (primary) or #bec0c5 (secondary)
background: #000000
border: #000000 or #fbfbfa
accent: #0075ff
primary action: no distinct CTA color

Example Component Prompts:
1. Create a `Ghost Contact Button (Light)` with 'Contact Us' text, using Ghost Outline (#fbfbfa) text on a Midnight Void (#000000) background, with a 1px Midnight Void border and 999px radius. Padding 0px vertical, 19.2px horizontal.
2. Create a `Video Player Card` component: midnight void (#000000) background, 12px border-radius, 0px padding, no shadow. Placeholder content to be a full-bleed embedded video.
3. Create a prominent headline using MagicUiPro, weight 600, size 24px, lineHeight 1.0, letterSpacing -0.0100em, with text color Midnight Void (#000000).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516330818-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516330818-thumb.jpg |

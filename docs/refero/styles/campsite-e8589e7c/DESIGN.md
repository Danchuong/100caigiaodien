# Campsite — Refero Style

- Refero URL: https://styles.refero.design/style/e8589e7c-5ba9-4923-aa7f-0f1bf0d679be
- Site URL: https://campsite.design
- ID: e8589e7c-5ba9-4923-aa7f-0f1bf0d679be
- Theme: light
- Industry: productivity
- Created: 2026-02-02T20:17:29.000Z
- Ranks: newest: 1237, popular: 265, trending: 355

> Desktop OS window pane, minimalist and functional.

## Description

Campsite presents a pragmatic, focused aesthetic, prioritizing content clarity over visual embellishment. A mostly grayscale palette punctuated by sparse, functional pops of color guides attention without distraction. Typography is both compact and airy, creating easily scannable information blocks. The overall effect is one of quiet efficiency, like a well-organized office stripped of excess.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #171717 | neutral | Primary text, headings, icons. The deep, almost black, tone provides maximum contrast against light backgrounds. |
| Canvas | #ffffff | neutral | Page backgrounds, card surfaces, UI elements. The pure white ensures a clean, expansive foundation for content. |
| Fog | #f5f5f5 | neutral | Subtle background for UI elements, hover states, input fields. Provides visual separation without harshness, creating soft boundaries. |
| Steel | #a3a3a3 | neutral | Secondary text, subtle borders, inactive elements. Offers a softer alternative to Ink for less prominent information. |
| Graystone | #737373 | neutral | Tertiary text, descriptive labels. A deeper gray than Steel for slightly more emphasis while remaining muted. |
| Ember | #451a03 | brand | Accent for important notifications or specific content highlighting. Its muted orange hue adds warmth without overwhelming the neutral palette. |
| Lagoon | #3b82f6 | accent | Highlight for interactive elements, focus states. A vivid blue that stands out clearly against the grays and acts as a primary interaction indicator. |
| Success Green | #22c55 | semantic | Feedback for positive actions, confirmation messages. A clear, vivid green signalling success. |
| Warning Red | #ef4444 | semantic | Negative feedback, alert indicators. A vivid red to denote caution or error. |
| Pale Yellow | #fef3c7 | semantic | Subtle background for warnings or highlights, providing a soft context without high contrast. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600 | 10px, 11px, 12px, 13px, 14px, 15px, 16px, 17px, 18px, 20px, 22px, 29px, 58px | 1.00, 1.20, 1.33, 1.40, 1.43, 1.50, 1.56, 1.63, 1.80 | The primary typeface for all text. Its clean, geometric forms at various weights provide excellent readability for both headings and body text, supporting a professional yet approachable tone. Tighter letter spacing on display sizes prevents them from sprawling. |
| ui-monospace | monospace | 400, 600 | 12px | 1.00 | Used for code snippets or specific data displays where precise alignment and character distinction are important, maintaining a technical aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.25 |
| body | 14 | 1.5 | 0 |
| body-lg | 16 | 1.5 | 0 |
| subheading | 18 | 1.43 | 0 |
| heading | 22 | 1.33 | -0.374 |
| heading-lg | 29 | 1.2 | -0.522 |
| display | 58 | 1 | -1.8 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "fields": "4px",
    "modals": "12px",
    "buttons": "9999px"
  },
  "elementGap": "4px",
  "sectionGap": "72px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Announcement Banners



### Post Feed Card



### Testimonial Block



### Primary Navigation Button (Text)

**Role:** Interactive element

Ghost button with Ink text on Canvas background, borders set at rgba(0, 0, 0, 0.1), 9999px border radius. Padding 0px vertical, 10px horizontal. Used for top-level navigation.

### Secondary Action Button (Filled)

**Role:** Interactive element

Button with Ink text on Fog background, rgba(0, 0, 0, 0.1) borders, 6px border radius. Padding 0px vertical, 10px horizontal. Subtle background for secondary actions.

### Call to Action Button (Green)

**Role:** Interactive element

Button with Canvas text on Success Green (#22c55e) background, rgba(255, 255, 255, 0.12) borders, 9999px border radius. Padding 0px vertical, 10px horizontal. Signals primary actions with a clear visual cue.

### Icon Button (Ghost)

**Role:** Interactive element

Button with Light Gray text on rgba(255, 255, 255, 0.08) background, rgba(255, 255, 255, 0.12) borders, 9999px border radius. No padding, used for minimalist interactive icons.

### Homepage Headline

**Role:** Display Text

Inter, 58px, weight 600, line-height 1.00, letter-spacing -1.8px, Ink color. Dominant focal point for key messages.

### Section Heading

**Role:** Heading Text

Inter, 29px, weight 600, line-height 1.20, letter-spacing -0.522px, Ink color. Used for major section titles.

### Info Banner (Notice)

**Role:** Status/Alert

Small banner with Ember text on Pale Yellow background (#fef3c7), with 9999px border radius and 6px horizontal padding. Delivers important, but not critical, passive information.

### Notification Tag (Red)

**Role:** Status/Alert

Small tag with white text on Warning Red (#ef4444) background, 9999px border radius, minimal padding. Used for urgent, concise status updates.

### UI Card

**Role:** Content Container

Canvas background with soft elevation shadow (rgba(0, 0, 0, 0.05) 0px 3px 6px -3px, etc.), 8px border radius. Contains groups of related information.

### Input Field

**Role:** Interactive Input

Fog background, subtle border, 4px border radius. Placeholder text in Steel, active/focus state indicated by Lagoon.

## Do's

- Use Ink (#171717) for all primary body text and headlines to maintain directness.
- Apply 9999px border-radius to all action buttons for a consistent soft, pill-like appearance.
- Employ Lagoon (#3b82f6) exclusively for primary interactive states and link hovers to signal interactivity clearly.
- Maintain a clear visual hierarchy by utilizing Inter at weight 600 for all headings (29px and 58px) and weight 400 for body text.
- Separate content sections with at least 72px vertical spacing to ensure ample breathing room and prevent visual clutter.
- Design all content containers (cards, modals) with 8px border radius and the soft elevation shadow (rgba(0, 0, 0, 0.05) 0px 3px 6px -3px) to imply depth without heavy shadows.

## Don'ts

- Do not introduce strong chromatic colors other than Ember (#451a03), Lagoon (#3b82f6), Success Green (#22c55e), and Warning Red (#ef4444) to maintain the muted, focused palette.
- Avoid using multiple border-radius values on elements of the same type; stick to 9999px for buttons, 8px for cards, and 4px for inputs.
- Do not use letter spacing greater than normal for text smaller than 16px; tighter spacing is reserved for display sizes.
- Do not use heavy, dark shadows; the subtle rgba(0, 0, 0, 0.05) 0px 3px 6px -3px shadow is the specified elevation style.
- Avoid decorative gradients or background images; the design emphasizes clean surfaces and content focus.
- Do not use generic system default blue for links; ensure all links use Ink (#171717) with subtle underline or context-specific styling.

## Layout

The page maintains a centered, max-width layout for content, which contrasts with the full-bleed hero section. The hero prominently features a large, centered headline over a background that combines a product screenshot (UI mockups) with an abstract, energetic gradient. Subsequent sections employ a consistent alternating pattern of text on the left and visual elements (product screenshots, further UI mockups) on the right, or vice versa. Vertical rhythm is established through generous and consistent section gaps (around 72px). Content density within sections is moderate, with ample whitespace around text blocks and UI components, promoting readability. Navigation is a simple top bar with text links and a 'ghost' style button on the far right.

## Imagery

This site predominantly uses product screenshots and UI mockups presented within realistic browser/OS frames, giving a 'software-in-use' authenticity. Photography is minimal, appearing primarily as small profile pictures. Illustrations are abstract and appear in the background of the hero section, an energetic splash of orange and white that provides a counterpoint to the otherwise orderly UI elements. Icons are filled, monochrome (Ink), and consistently clean-lined. The overall role of imagery is explanatory and functional, showcasing the product directly rather than relying on abstract concepts or lifestyle visuals; the abstract hero gradient is the only concession to mood, pulling from energetic, primary colors and making it distinct.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.05) 0px 3px 6px -3px, rgba(0, 0, 0, 0.05) 0px 2px 4px -2px, rgba(0, 0, 0, 0.05) 0px 1px 2px -1px, rgba(0, 0, 0, 0.05) 0px 1px 1px -1px, rgba(0, 0, 0, 0.05) 0px 1px 0px -1px |
| Button/Link (Interactive) | rgba(0, 0, 0, 0.08) 0px 1px 1px -1px, rgba(0, 0, 0, 0.08) 0px 2px 2px -1px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px, rgb(255, 255, 255) 0px 1px 0px 0px inset, rgb(255, 255, 255) 0px 1px 2px 1px inset, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Shares a similar emphasis on clean, functional UI, high contrast typography, and restrained use of color for interaction and status. |
| Notion | Employs a text-heavy, content-first approach with a minimalist aesthetic and a focus on clarity and organization. |
| Hey.com | Utilizes a sparse color palette, strong typography, and a compact, desktop-app like feel for communication and productivity tools. |
| Basecamp | Focuses on clear information display and a straightforward design for project management, with color used sparingly for emphasis. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #171717 (Ink)
- Background: #ffffff (Canvas)
- CTA: #22c55 (Success Green)
- Border: #a3a3a3 (Steel)
- Accent: #3b82f6 (Lagoon)

### 3-5 Example Component Prompts
1. Create a hero section with: Canvas background, full-bleed abstract orange/white gradient background graphic. Centered headline 'Teamwork, meet deep work' at Inter 58px weight 600, #171717, letter-spacing -1.8px. Subtext 'The new standard for thoughtful team communication — replace noisy chats with focused, organized posts.' at Inter 22px weight 400, #171717, line-height 1.33. Below this, a large product screenshot with subtle card elevation.
2. Generate a primary navigation button: text 'Open app' in Inter 14px weight 500, #171717, on transparent background with rgba(0,0,0,0.1) border, 9999px border-radius, and 0px 10px padding.
3. Design a UI card: #ffffff (Canvas) background, 8px border-radius, and the card elevation shadow 'rgba(0, 0, 0, 0.05) 0px 3px 6px -3px, rgba(0, 0, 0, 0.05) 0px 2px 4px -2px, rgba(0, 0, 0, 0.05) 0px 1px 2px -1px, rgba(0, 0, 0, 0.05) 0px 1px 1px -1px, rgba(0, 0, 0, 0.05) 0px 1px 0px -1px'. Inside, a section headline 'Latest posts' (Inter 18px weight 600, #171717) and a list of items using Inter 14px weight 400, #171717.
4. Create a secondary action button: text 'Join channel' in Inter 14px weight 500, #171717, on #f5f5f5 (Fog) background, rgba(0,0,0,0.1) border, 6px border-radius, and 0px 10px padding.
5. Implement a simple input field: #f5f5f5 (Fog) background, 4px border-radius, placeholder text in #a3a3a3 (Steel) and active border color set to #3b82f6 (Lagoon).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775922929292-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775922929292-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e8589e7c-5ba9-4923-aa7f-0f1bf0d679be-1777568590598-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e8589e7c-5ba9-4923-aa7f-0f1bf0d679be-1777568590598-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e8589e7c-5ba9-4923-aa7f-0f1bf0d679be-1777568590598-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e8589e7c-5ba9-4923-aa7f-0f1bf0d679be-1777568590598-preview-detail-poster.jpg |
